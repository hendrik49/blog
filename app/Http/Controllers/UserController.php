<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    //

    public function index()
    {
        $query = Cache::remember("user_all", 10 * 60, function () {
            return User::all();
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
