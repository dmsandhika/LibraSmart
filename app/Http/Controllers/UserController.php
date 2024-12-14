<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

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

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'role' => 'required'
            ]);
            $roles = $request->input('role');
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $user->assignRole($roles);
            $role = Role::findByName($roles);
            $user->syncPermissions($role->permissions);

            return back()->with('success', 'User Baru berhasil ditambahkan');
    }
}