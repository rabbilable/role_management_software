<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 

        // $admin = User::findById(1);
        // $paul = User::findById(2);
        // $john = User::findById(3);
        // $ringo = User::findById(4);

        // User Roles
        // $viewer = Role::findById(1);
        // $editor = Role::findById(2);
        // $writer = Role::findById(3);
        // $admin = Role::findById(4);

        // // User Permission
        // $view_post = Permission::findById(1);
        // $edit_post = Permission::findById(2);
        // $write_post = Permission::findById(3);

        // $viewer->givePermissionTo($view_post);
        // $editor->givePermissionTo($edit_post);
        // $writer->givePermissionTo($write_post);
        // $admin->givePermissionTo($write_post, $view_post, $edit_post);



        // $user = Auth::user();
        // //   print_r($user);
        // $user->assignRole(3);


        // print_r ($user->getAllPermissions());

        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {
        // print_r($post->all());

        $post->insert([
            'post' => $request->post
        ]);

        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // print_r($posts);
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post = Post::findOrFail($request->post_id)->update([
            'post'=> $request->post
        ]);

       return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }


    ///////////////////////////////////// PERMISSION AND ROLE ////////////////////////////////////////

    public function permission(){

        $permissions = Permission::all();
        $roles = Role::all();
        $users = User::all();

       return view('post.permission', compact('roles', 'permissions', 'users'));

    }

    public function addRole(Request $request){

        $data = request()->validate([
            'role_name' => 'required|unique:roles,name'
        ]);

        Role::create($data);

        return back();
    }

    public function addPermission(Request $request){

        Permission::create([
            'name'=>$request->permission_name
        ]);
        return back();
    }

    public function assignPermission(Request $request){

       foreach ($request->permission_id as $permission) {
        $role = Role::find($request->role_id);
        $permission = Permission::find($permission);

        // echo $role;
        $permission->assignRole($role);
        // $role->syncPermissions($permission);
        }
    // echo $permission;
        return back();
    }

    public function removePermission($role_id, $permission_id ){

        $role = Role::findOrFail($role_id);
        $permission = Permission::findOrFail($permission_id)->name;

        $role->revokePermissionTo($permission);

    //    echo $permission;
    //    echo $role;
    //    echo $permission_id;
    return back();
    }

    public function assignRole(Request $request){
      
        $user_id = $request->user_id;
        $role_id = $request->user_id;
        
    //    $user = $user_id->getPermissionNames();
        
       $user = User::find($user_id);
       $role = Role::find($role_id);


    //   $test =  $user->getAllPermissions();

        // echo $test;
        $user->syncRoles($role);

        // return back();
    }
}
