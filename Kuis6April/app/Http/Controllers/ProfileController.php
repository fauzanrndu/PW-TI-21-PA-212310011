<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index(){
        return view('Profiles.profile');
    }

    public function indentity(){
        return view('Profiles.identity');
    }

    public function family(){
        return view('Profiles.family');
    }
}
