<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShirtRequests;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\RoboUsers;

class AccountsController extends Controller
{
    public function index()
    {

        $accounts = RoboUsers::all();
        return view('accounts.allUsers', compact('accounts'));

    }

    public function show($id)
    {
        $user = RoboUsers::findorfail($id);
        return view('accounts.user', compact('user'));

    }

    public function create()
    {

        return view('accounts.create', compact('accounts'));

    }

    /**
     * @param ShirtRequests $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ShirtRequests $request)
    {
        RoboUsers::create($request->all());
        return redirect('accounts');
    }
}
