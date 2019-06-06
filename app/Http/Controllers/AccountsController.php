<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function showList(){
        $user = Account::all();
        return view('users',[
            'user' => $user,
        ]);
    }
}