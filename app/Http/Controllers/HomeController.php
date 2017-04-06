<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        $user = Auth::User();
        $userId = $user->id;
        //dd($user);
        //$prof= User::where('id', '=',$userId)->get();
        /*$bal=Reservation::where('userid', '=', $userId)
            ->join('rooms', 'reservations.client_room', '=','rooms.room_no')
            ->select('reservations.*', 'rooms.room_no', 'rooms.cost_per_month', 'rooms.cost_per_day')
            ->get();*/

        //dd($user);

        $profile3 = DB::table('users')
            ->where('users.id', $userId)
            ->join('user_role', 'users.id', '=', 'user_role.user_id')
            ->select('users.*', 'user_role.role_id')
            ->get();
        //dd($profile3);

        foreach ($profile3 as $value => $key) {



        if ($key->role_id == '3') {

            // return View('Admin.adminprofile')->with('user', $user)->with('users', $users);
            return redirect('/admin');
        }
        elseif ($key->role_id == '4' ) {

            // return View('Admin.adminprofile')->with('user', $user)->with('users', $users);
            return redirect('/Alladmins');
        }

       elseif ($key->role_id == '2') {

           // return View('Admin.adminprofile')->with('user', $user)->with('users', $users);
           return redirect('/Alladmins');

       }



    }

        //dd($user);
            if ($user->roles == 1) {
                return View('lenders.Lendersprofile')
                    ->with('user', $user);
            }

            elseif($user->roles == 0){
                return View('investors.Investorprofile')
                    ->with('user', $user);
            }
            elseif($user->roles == 3){
                return View('Admin.Mainprofile')
                   // return View('investors.Investorprofile')
                    ->with('user', $user);
            }
         /* elseif($user->roles == 0){
                return View('investors.Investorprofile')
                    ->with('user', $user);
            }*/

        else{

        }


        // return view('home');
    }
}
