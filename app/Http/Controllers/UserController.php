<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cache;

class UserController extends Controller
{
    public function index()
    {
        $query = Cache::remember("title", 10 * 60, function () {
            return Article::all();
        });
 
        foreach ($query as $q) {
            echo "<li>{$q->name}</li>";
        }
    }
    public function getUser()
    {
        $query = User::all();
        foreach ($query as $q) {
            echo "<li>{$q->name}</li>";
        }
    }
}
