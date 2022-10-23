<?php

namespace App\Modules\User\Controllers;

class UserController extends Controller
{
    public function index()
    {
        return view("user::test", ["user" => "Adam"]);
    }
}
