<?php

namespace App\Http\Controllers\Admin\View;

use App\Models\Admin;
use App\Rules\Admin\Password;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AdminProfileController extends Controller
{
    /**
     * Show the user profile screen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Request $request)
    {
        return view('admin.profile', [
            'request' => $request,
            'user' => $request->user(),
        ]);
    }

    public function updateInf(Request $request) {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore(auth()->id())],
        ];

        $messages = [
            'name' => '',
            'email' => 'Valid email is required',
        ];

        $request->validate($rules, $messages);

        $admin = Admin::find(auth()->id());

        if ($request->name)
            $admin->name = $request->name;

        if ($request->email)
            $admin->email = $request->email;
        $admin->save();

        Session::flash('update-success-message', 'Successfully updated information!');

        return redirect()->route('profile');
    }

    public function updatePass(Request $request) {
        $messages = [
            'current_password.required' => 'Please enter current password',
            'password.required' => 'Please enter password',
        ];

        $request->validate([
            'current_password' => 'required',
            'password' => 'required|same:password',
            'password_confirmation' => 'required|same:password',
        ]);

        $current_password = Auth::User()->password;
        if(Hash::check($request->current_password, $current_password))
        {
            $admin_id = Auth::User()->id;
            $obj_admin = Admin::find($admin_id);
            $obj_admin->password = Hash::make($request->password);
            $obj_admin->save();

            Session::flash('pass-update-success-message', 'Successfully updated password!');
        }
        else {
            Session::flash('pass_error', 'Please enter correct current password');
        }
        return redirect()->route('profile');
    }
}
