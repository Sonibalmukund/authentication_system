<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //
    public function index()
    {
        $users = User::where('role', 'user')->get(); 
        return view('admin.dashboard', compact('users'));
    }

}
