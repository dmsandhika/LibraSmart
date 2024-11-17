<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
/**
 * Display a listing of all users.
 *
 * Retrieves all users from the database and passes them to the 'admin.data' view
 * along with a sequential number starting from 1.
 *
 * @return \Illuminate\View\View
 */
    public function index(){
        $data = User::all();
        $no=1;
        return view('admin.data-user', compact('data', 'no'));
    }
}