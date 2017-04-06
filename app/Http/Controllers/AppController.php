<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function getIndex()
    {
        return view('index');
    }
    
    public function getAccountantPage()
    {
        return view('users.accountant');
    }

    public function getHRPage()
    {
        return view('users.HR');
    }

    public function getAlladminsPage()
    {
        return view('Admin.Mainprofile');
    }

    public function getAdminPage()
    {
        $users = User::all()->except(Auth::id());;
        return view('Admin.adminprofile', ['users' => $users]);
    }

    public function getGenerateArticle()
    {
        return response('Article generated!', 200);
    }
    
    public function postAdminAssignRoles(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        $user->roles()->detach();
        if ($request['role_user']) {
            $user->roles()->attach(Role::where('name', 'User')->first());
        }

        if ($request['role_admin']) {
            $user->roles()->attach(Role::where('name', 'Admin')->first());
        }
        if ($request['role_accountant']) {
            $user->roles()->attach(Role::where('name', 'Accountant')->first());
        }
        if ($request['role_HR']) {
            $user->roles()->attach(Role::where('name', 'HR')->first());
        }
        return redirect()->back();
    }
}