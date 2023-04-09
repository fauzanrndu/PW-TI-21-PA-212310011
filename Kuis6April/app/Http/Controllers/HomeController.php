<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        
        $data = array();
        $data['title'] = "Blade Directive";
        $data ['npm'] = 212310029;
        $students[]=array("npm"=>212310004, "name"=>"Muhamad Agus Setiawan", "gender"=>"M", "address"=>"bogor");
        $students[]=array("npm"=>212310029, "name"=>"Muhamad Ilham Fachrizal", "gender"=>"M", "address"=>"bogor");
        $students[]=array("npm"=>212310044, "name"=>"Hana Yulia Rahma", "gender"=>"F", "address"=>"bogor");
        $students[]=array("npm"=>212310027, "name"=>"Muhamad ASKAH", "gender"=>"M", "address"=>"bogor");
        $students[]=array("npm"=>212310005, "name"=>"ADJIE SYERAFFI RAHMAT", "gender"=>"M", "address"=>"bogor");
        $data['students'] = $students;
        return view('modules.home.home')->with("data",$data);
    }
}
