<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/Profile';

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
            'username' => 'required|max:60|unique:users',
            'email' => 'required|email|max:120|unique:users',
            'password' => 'required|min:4|confirmed',
            'first_name' => 'required|max:60',
            'first_name_eng' => 'required|max:60',
            'last_name' => 'required|max:60',
            'last_name_eng' => 'required|max:60',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
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

        $imageName = '';
        if(!is_null($data['image'])){
        $imageName = $data['username'].'.'.$data['image']->getClientOriginalExtension();
        $data['image']->move(public_path('images/users'), $imageName);
        }
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'first_name_eng' => $data['first_name_eng'],
            'last_name_eng' => $data['last_name_eng'],
            'privileges_id' => 2,
            'education' => str_replace(',' , '<br>' , $data['education']),
            'tel' => $data['tel'],
            'tel_in' => $data['tel_in'],
            'research_gate' => $data['research_gate'],
            'image' => $imageName,
            'executive' => 1,


         ]);
       
    }
}
