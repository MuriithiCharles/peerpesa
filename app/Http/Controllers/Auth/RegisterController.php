<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Organisation;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\ActivationService;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void

     */


//extra code
protected $activationService;

public function __construct(ActivationService $activationService)
{
    $this->middleware('guest', ['except' => 'logout']);
    $this->activationService = $activationService;
}

public function register(Request $request)
{
    $validator = $this->validator($request->all());

    if ($validator->fails()) {
        $this->throwValidationException(
            $request, $validator
        );
    }

    $user = $this->create($request->all());
    

    $this->activationService->sendActivationMail($user);

    return redirect('/login')->with('status', 'We sent you an activation code. Check your email.');
}



    public function registerLenders(Request $request)
    {
        $validator = $this->validator2($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $user = $this->create2($request->all());

        $this->activationService->sendActivationMail2($user);

        return redirect('/login')->with('status', 'We sent you an activation code. Check your email.');
    }


//end of extra code

  /*  public function __construct()
    {
        $this->middleware('guest');
    }*/

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'phone' => 'required',
        ]);
    }

    protected function validator2(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:organisations',
            'password' => 'required|min:6|confirmed',
            'phone' => 'required',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'roles' => $data['roles'],


            'password' => bcrypt($data['password']),


        ]);
    }

    protected function create2(array $data)
    {
        return Organisation::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => bcrypt($data['password']),
            //$user->roles()->attach(Role::where('name', 'User')->first());

        ]);
    }
}
