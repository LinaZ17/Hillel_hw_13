<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {

        $users = User::firstOrCreate([
            'name' => 'Loran',
            'surname' => 'Devil',
            'email' => 'devil@gmail.com',
            'password' => 'ut637869uyi',
            'phone' => '+3504-00-88-999'
        ]);

        $users = User::all();

        return view('users.users_index', [
            'users' => $users
            ]);

    }


}
