<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Role::create(['name'=>'admin']);
        // Permission::create(['name' => 'edit post']);

        // // // find role
        // $admin = Role::findById(1);
    
        // // //find permission
        // $edit = Permission::findById(1);
        // $del = Permission::findById(2);
        // $permission = Permission::create(['name' => 'write post']);
        // $role = Role::findById(2);
        // $permission = Permission::findById(4);

        // $role->givePermissionTo($permission);

        // // role assign
        // $admin->givePermissionTo($edit, $del);


        // auth()->user()->givePermissionTo('edit post');
        // auth()->user()->assignRole('admin');

        // return auth()->user()->getDirectPermissions();
        
        // return User::role('admin')->get();
        
        return view('home');

        
    }
}