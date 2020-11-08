<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class master extends Controller
{
    public function master()
    {
        return view('masterlayout');
    }
}
