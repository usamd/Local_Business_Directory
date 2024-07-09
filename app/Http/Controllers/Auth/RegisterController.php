<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['required', 'string', 'max:255'],
            'nearest_city' => ['required', 'string', 'max:255'],
            'mobile_number' => ['required', 'string', 'max:20'],
            'id_number' => ['required', 'string', 'max:20'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'address' => $data['address'],
            'nearest_city' => $data['nearest_city'],
            'mobile_number' => $data['mobile_number'],
            'id_number' => $data['id_number'],
            'role_id' => 2, // Assuming role_id 2 corresponds to a specific role in your roles table
        ]);
    }


    protected function businessRegisterIndex()
    {
        return view('auth.register_business');
    }

    public function registerBusiness(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'business_reg_no'=>$request->business_reg_no,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'nearest_city' => $request->nearest_city,
            'mobile_number' => $request->mobile_number,
            'id_number' => $request->id_number,
            'role_id' => 2, // Assuming role_id 2 corresponds to the business owner role
        ]);

        $business = Business::create([
            'business_name' => $request->business_name,
            'business_email' => $request->business_email,
            'business_address' => $request->business_address,
            'phone' => $request->phone,
            'district' => $request->district,
            'postal' => $request->postal,
            'category' => $request->category,
            'province' => $request->province,
            'user_id' => $user->id,
        ]);

        event(new Registered($user));

        auth()->login($user);

        return redirect($this->redirectPath());
    }

    protected function businessValidator(array $data)
    {
        return Validator::make($data, [
            'business_name' => ['required', 'string', 'max:255'],
            'business_email' => ['required', 'string', 'email', 'max:255', 'unique:businesses'],
            'business_address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:15'],
            'district' => ['required', 'string', 'max:255'],
            'postal' => ['required', 'string', 'max:10'],
            'category' => ['required', 'string', 'max:255'],
            'province' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'mobile_number' => ['required', 'string', 'max:15'],
            'address' => ['required', 'string', 'max:255'],
        ]);
    }
}
