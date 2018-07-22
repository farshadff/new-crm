<?php

namespace App\Http\Controllers;

use App\Uac;
use Bouncer;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        Auth::user()->assign('admin');
        $role_list = Bouncer::role()->all();

        return view('admin.uac.index', compact('role_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Uac $uac
     * @return \Illuminate\Http\Response
     */
    public function show(Uac $uac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Uac $uac
     * @return \Illuminate\Http\Response
     */
    public function edit(Uac $uac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Uac $uac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Uac $uac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Uac $uac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Uac $uac)
    {
        //
    }

    public function addrole()
    {
        $roles = Bouncer::role()->all();
        return view('admin.uac.addrole', compact('roles'));
    }

    public function addrolesave(Request $request, Uac $uac)
    {
        $name = $request->rolename;
        $title = $request->roletitle;
        $user = Bouncer::role()->firstOrCreate([
            'name' => $name,
            'title' => $title,
        ]);
        return redirect('admin/uac/');
    }

    public function addability()
    {
        $roles = Bouncer::ability()->all();
        return view('admin.uac.addability', compact('roles'));
    }

    public function addabilitysave(Request $request, Uac $uac)
    {
        $name = $request->abilityname;
        $title = $request->abilitytitle;
        $user = Bouncer::ability()->firstOrCreate([
            'name' => $name,
            'title' => $title,
        ]);
        return redirect('admin/uac/abilities');
    }

    public function abilities()
    {
        $abilities = Bouncer::ability()->all();
        return view('admin.uac.abilities', compact('abilities'));
    }
//    assign role to users
    public function assignrole()
    {
        $user_list = User::all();
        $roles = Bouncer::role()->all();
        return view('admin.uac.assign', compact('user_list','roles'));
    }

    public function assignrolesave(Request $request, Uac $uac)
    {
        $userget = $request->user;
        $role = $request->role;
        $userassing = User::find($userget);
        $userassing->assign($role);
        return redirect('admin/abilities');
    }

}
