<?php

namespace App\Http\Controllers\Supplier\Auth;

use App\Models\Supplier;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    use RegistersUsers;


    protected $redirectTo = '/supplier/dashboard';


    public function __construct()
    {
        $this->middleware('supplier.guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:suppliers',
            'password' => 'required|min:6|confirmed',
        ]);
    }


    protected function create(array $data)
    {
        return Supplier::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function showRegistrationForm()
    {
        return view('supplier.auth.register');
    }

    protected function guard()
    {
        return Auth::guard('supplier');
    }
}