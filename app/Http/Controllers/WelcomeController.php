<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello(){
        return 'Hello World';
    }

    public function home(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'NIM : 1931710083 Nama : Yoga Meleniawan Pamungkas';
    }
}
