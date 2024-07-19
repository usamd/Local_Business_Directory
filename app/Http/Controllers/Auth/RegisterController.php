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
use Illuminate\Support\Facades\Log;

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
    Log::info('Starting business registration process.');

    try {
        $this->businessValidator($request->all())->validate();
        Log::info('Validation passed.');

        $user = User::create([
            'name' => $request->owner_name, // Ensure the form field name matches
            'email' => $request->owner_email, // Ensure the form field name matches
            'password' => Hash::make($request->password),
            'mobile_number' => $request->owner_phone, // Ensure the form field name matches
            'address' => $request->business_address,
            'role_id' => 1, // Assuming role_id 1 corresponds to the business owner role
            'business_reg_no' => $request->business_reg_no, // Added this field
        ]);
        Log::info('User created successfully.', ['user_id' => $user->id]);

        $business = Business::create([
            'business_name' => $request->business_name,
            'business_email' => $request->business_email,
            'business_address' => $request->business_address,
            'phone' => $request->phone,
            'district' => $request->district,
            'postal' => $request->postal,
            'category' => $request->category,
            'province' => $request->province, // Ensure the form field name matches
            'user_id' => $user->id,
        ]);
        Log::info('Business created successfully.', ['business_id' => $business->id]);

        event(new Registered($user));
        Log::info('Registered event dispatched.');

        auth()->login($user);
        Log::info('User logged in.');

        return redirect($this->redirectPath());
    } catch (\Exception $e) {
        Log::error('Error during business registration: ' . $e->getMessage());
        return redirect()->back()->withErrors(['error' => 'Registration failed. Please try again.']);
    }
}

protected function businessValidator(array $data)
{
    Log::info('Validating business registration data.', $data);

    return Validator::make($data, [
        'business_name' => ['required', 'string', 'max:255'],
        'business_email' => ['required', 'string', 'email', 'max:255', 'unique:businesses'],
        'business_address' => ['required', 'string', 'max:255'],
        'business_reg_no' => ['required', 'string', 'max:255', 'unique:users'], // Changed to unique:businesses
        'phone' => ['required', 'string', 'max:15'],
        'district' => ['required', 'string', 'max:255'],
        'postal' => ['required', 'string', 'max:10'],
        'category' => ['required', 'string', 'max:255'],
        'province' => ['required', 'string', 'max:255'],
        'owner_name' => ['required', 'string', 'max:255'], // Changed this to match form field name
        'owner_email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'], // Changed to unique:users,email
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'owner_phone' => ['required', 'string', 'max:15'], // Changed this to match form field name
    ]);
}

}
