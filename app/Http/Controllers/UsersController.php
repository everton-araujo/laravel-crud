<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyUser;

class UsersController extends Controller
{
    public function index()
    {
        $users = MyUser::get();

        return view('users.list', ['users' => $users]);
    }
}
