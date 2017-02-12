<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Client;



use Illuminate\Http\Request;

class OurServicesController extends Controller
{
    public function services(){
        return view('services.Our_services');
    }

    public function rentals(){
        return view('services.Rentals');
    }

    public function guests(){
        return view('services.Guests');
    }
    public function meetings(){
        return view('services.Meetings');
    }

    public function recreations(){
        return view('services.Recreations');
    }

    public function profile(){

       $client = DB::table('services')->where('Id_no', 29179234)->get();

       //s return View::make("users/user_home")->with('client',$client);
        return View::make("user_home", compact('client'));
    }
}
