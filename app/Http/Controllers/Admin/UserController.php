<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Http\Requests\UserAddRequest;
use App\Http\Requests\UserEditRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $searchKeyWord = "";

        return view('admin.user.index', compact(['users', 'searchKeyWord']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserAddRequest $request)
    {
        $password = Hash::make($request->password);
        $user = new User;
        $user = array('name' => $request->name, 'email' => $request->email,
        'password' => $password, 'role_id' => $request->role_id);
        $user = User::create($user);

        return redirect('admin/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin/user.edit', compact(['user']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {
        $password = Hash::make($request->password);
        User::where('id', $id)->update(['email' => $request->email,
        'name' => $request->name, 'password' => $password]);

        return redirect('admin/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('admin/user');
    }

    public function search(Request $request)
    {
        $searchKeyWord = $request->input('search');
        $users = User::query()
            ->where('name', 'LIKE', "%{$searchKeyWord}%")
            ->orWhere('email', 'LIKE', "%{$searchKeyWord}%")
            ->orWhere('role_id', 'LIKE', "%{$searchKeyWord}%")
            ->get();

        return view('admin.user.index', compact('users', 'searchKeyWord'));
    }
}