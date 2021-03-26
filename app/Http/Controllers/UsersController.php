<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyUser;
use Redirect;

class UsersController extends Controller
{
    public function index()
    {
        $users = MyUser::get();

        return view('users.list', ['users' => $users]);
    }

    public function newUser()
    {
        return view('users.form');
    }

    public function addUser(Request $request)
    {
        $user = new MyUser;
        $user = $user->create($request->all());

        return Redirect::to('/users');
    }

    public function editUser($id)
    {
        $user = MyUser::findOrFail($id);
        return view('users.form', ['user' => $user]);
    }

    public function updateUser($id, Request $request)
    {
        $user = MyUser::findOrFail($id);
        $user -> update($request->all());

        return Redirect::to('/users');
    }

    public function deleteUser($id)
    {
        $user = MyUser::findOrFail($id);
        $user -> delete();

        return Redirect::to('/users');
    }
}
