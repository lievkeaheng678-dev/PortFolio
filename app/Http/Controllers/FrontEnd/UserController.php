<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\FrontEnd\UserController;

class UserController extends Controller
{
    public function index(){
        return view('components.layouts.main');
    }
    public function about(){
        return view('components.layouts.about');
    }
    public function resume(){
        return view('components.layouts.resume');
    }
     public function contact(){
        return view('components.layouts.contact');
    }
}
