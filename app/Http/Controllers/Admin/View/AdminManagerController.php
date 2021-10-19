<?php

namespace App\Http\Controllers\Admin\View;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Gate;
use Livewire\WithPagination;

class AdminManagerController extends Controller
{
    /**
     * Show the user profile screen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function show(Request $request)
    {
        if(Gate::allows('show-admin-manager')) {
            return view('admin.admin-manager');
        }

    }
}
