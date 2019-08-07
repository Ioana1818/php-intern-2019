<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ValidationController extends Controller
{  
    public function check($url)
    { 
        $users = User::all()->where('validate_url', $url);
        foreach ($users as $user) {
            if ($user->email_validated!= 1) {
                $user->email_validated = 1;
                $user->save();
            }
        }

        return view('\home',compact('users'));
    }
}
