<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function register()
    {
        return view('auth.register');
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
            return view('auth.login',compact('errors'));
        }
        if ($data->username == $uuser_name && $data->password == $ppassword)
        {
            $request->session()->put('user', $data);
            return redirect('dashboard');
        }else{
            $errors = ["Incorrect Credentials"];
            return view('auth.login',compact('errors'));
        }


    }

    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        return view('auth.login',compact('message'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
