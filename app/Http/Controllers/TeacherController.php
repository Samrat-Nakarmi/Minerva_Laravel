<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Teacher;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function verify()
    {
        return view('verify');
    }

    public function index()
    {
        return view('teacher');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $uuser_name = $request->username;
        $ppassword = $request->password;
        $data = DB::table('teachers')->where('username',$uuser_name)->first();
        if ($data == null)
        {
            $errors = ["No Such User : ".$uuser_name];
            return view('teacher',compact('errors'));
        }
        if ($data->username == $uuser_name && $data->password == $ppassword)
        {
            $request->session()->put('user', $data);
            return redirect('dashboard');
        }else{
            $errors = ["Incorrect Credentials"];
            return view('teacher',compact('errors'));
        }
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email'=>'required|email|unique:teachers',
            'password'=>'required',
            'username'=>'required|unique:teachers'
        ]);
        $email = $request->email;
        $password = $request->password;
        $username = $request->username;
        $data = [
            "email" => $email,
            "username" => $username,
            "password" => $password
        ];
        Teacher::create($data);
        $message = "User Registered";
        Auth::attempt(['email' => $email, 'password' => $password]);
        return view('dashboard',compact('message'));
    }
}
