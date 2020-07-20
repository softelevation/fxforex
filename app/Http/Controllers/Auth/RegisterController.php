<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

use App\Jobs\SendEmailJob;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'second_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'digits:10'],
            'dob' => ['required'],
            'gender' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      //dd($data);
        $rand_users_id = mt_rand(100000, 999999);
      
        $password_decrypt['password_decrypt'] = $data['password'];
     
        $user =  User::create([
            'name' => $data['name'],
            'second_name' => $data['second_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'receive_news_latters' => isset($data['receive_news_latters'])?$data['receive_news_latters']:'',
            'term_condition' => isset($data['term_condition'])?$data['term_condition']:'',
            'm_id' => 'FR'.$rand_users_id,
            'role' => 'users',
            'staus' => 1,
           
            'dob' => isset($data['dob'])?$data['dob']:'',
            'gender' => isset($data['gender'])?$data['gender']:'',
            'client_status' => 1,
            'lead_exist' => isset($data['lead_exist'])?$data['lead_exist']:'',
            'portal_user_id' => mt_rand(100000, 999999),
        ]);   
        $details['email'] = $data['email'];
       // dispatch(new App\Jobs\SendEmailJob($details));
        SendEmailJob::dispatch($user,$password_decrypt,$details);
        //Mail::to($data['email'])->send(new WelcomeMail($user,$password_decrypt));
        return $user;
    }
}
