<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $roles = Role::all();

        return view('roles.index', ['roles'=>$roles]);
    }

    public function update() {
        $users = User::all();

        return view('roles.update', ['users'=>$users]);
    }

    public function create() {
        return view('roles.create');
    }

    public function store(Request $request)
    {

        $roles= new Role();
        $roles->name = request('name');
        $roles->save();

        return redirect('roles/index');
    }

    public function delete(Request $request, Role $post)
    {
        $post->delete();
        session()->flash('role-delete', 'Role has been deleted');
        return back();
    }
}
