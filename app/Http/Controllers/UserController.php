<?php

namespace App\Http\Controllers;

use App\Models\Audit;
use App\Models\Project;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();

        return view('users.index', ['users'=>$users]);
    }

    public function userIndex(){
        $users = User::all();

        return view('Admin.users', ['users'=>$users]);
    }

    public function delete(Request $request, User $post)
    {
        $post->delete();
        session()->flash('user-delete', 'User has been deleted');
        return back();
    }

    public function giveRole(User $user)
    {
        $roles = Role::all();
        return view('users.give-role',['user'=>$user, 'roles'=>$roles]);
    }
    public function updateRole(User $user){
        $inputs = \request()->all();
        $role_name = $inputs['role'];
        $role = Role::all()->where('name',$role_name)->first();

        if(!$user->userHasRole('route_name')){
            $user->roles()->attach($role);
            $user->save();
        }
        $users = User::all();
        return view('users.index', ['users'=>$users]);
    }

}
