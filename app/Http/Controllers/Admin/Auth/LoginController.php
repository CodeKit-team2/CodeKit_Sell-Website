<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginRequest;
use App\Models\Admin;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('signed.in:admin')->only('create');
        $this->middleware('admin.verified')->only('store');
        $this->middleware('admin.auth:admin')->only('destroy');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.auth.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Application|Factory|View|RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request_email = $request->get('email');

        if(!Admin::firstWhere('email', $request_email)->status == 'not_verified') {
            return redirect()->route('login.create')->with('errors', __('auth.not_verified'));
        }

        else{
            $request->session()->regenerate();
            return redirect(route('customer-manager'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login.create'));
    }
}
