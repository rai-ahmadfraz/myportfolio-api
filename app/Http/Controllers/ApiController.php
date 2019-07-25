<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\team;
use App\user;

use DB;

class ApiController extends Controller {

    public function data() {

        $items = DB::table('teams')->paginate(6);
        return $items->toArray();
    }

    public function getPortfolios() {

        $items = DB::table('portfolios')->paginate(6);
        return $items->toArray();
    }

    public function addUser(Request $request) {

        
        $user = new user;
         $user->fullname = $request->input('fullname');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->address = $request->input('address');
        $user->save();
        
    }

    public function getUser() {
        
        $users = user::all();
        return $users->toArray();
    }

}
