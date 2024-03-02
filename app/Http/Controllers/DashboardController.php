<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index () {
        $usersWithPosts = User::with('posts')->get();
        return view('dashboard', compact(
            'usersWithPosts'
        ));
    }
}
