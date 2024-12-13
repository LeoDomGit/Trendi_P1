<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    public function login(){
        return view('login');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function register()
    {
        return view('register');
    }

    public function submit_register(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users,email',
            'password'=>'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['check' => false, 'msg' => $validator->errors()->first()], 200);
        }
        $data=$request->all();
        $data['name']=$request->email;
        $data['password']=Hash::make($request->password);
        $data['created_at']=now();
        User::create($data);
        return response()->json(['check'=>true]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function checkLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|exists:users,email',
            'password'=>'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['check' => false, 'msg' => $validator->errors()->first()], 400);
        }
        if(!Auth::attempt(['email'=>$request->email,'password'=>$request->password,'status'=>1],1)){
            return response()->json(['check'=>false,'msg'=>'Sai email hoặc mật khẩu']);
        }
        $request->session()->regenerate();
        $user = Auth::user();
        Session::put('user', $user);
        return response()->json(['check'=>true]);
    }
    public function logout(){
        Auth::logout();
        Session::forget('user');
        return redirect('/');
    }
    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
