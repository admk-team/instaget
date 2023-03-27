<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function userregisteration(Request $request){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required'
        ]);
        $password = bcrypt($request->password);
        
        $model = new User();
        $model->name = $request->name;
        $model->email = $request->email;
        $model->password = $password;
        if($model->save()){
            return redirect()->route('front.index');
        }else{
            return redirect()->route('front.signup');
        }
    }

    public function user_register(Request $request){
        
        $request->validate([
            'email' => 'required|unique:users,email',
            'password' => 'required'
        ]);
        $password = bcrypt($request->password);
        $model = new User();
        $model->name = '';
        $model->email = $request->email;
        $model->password = $password;
        if($model->save()){
            Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            return redirect()->route('front.instagram.guestpost');
        }else{
            return redirect()->back();
        }
    }

    public function user_login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('')
                        ->withSuccess('You have Successfully loggedin');
        }else{
            return redirect()->route('front.login')->with('error' , 'Please check email and password');
        }
    }
    public function loginUser(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('front.instagram.guestpost');
        }else{
            return redirect()->back()->with('error' , 'Please check email and password');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }


    public function forgotpassword(){
        return view('front.userpasswordreset.forgotpassword');
    }

    public function email(Request $request){

        $this->validate(request(), [
            'email' => 'required|email',
        ]);
          $response = Password::sendResetLink([
            'email' => $request->email
        ]);

        //overridden if condition 
        if($response == "passwords.sent"){
            return back()->with(session()->flash('alert', 'Password reset link has been sent, please check your email'));
        }else{
            return back()->with(session()->flash('error', 'No such email address in our records, try again'));
        }
    }

    public function reset_page($token){
        return view('front.userpasswordreset.reset', ['token'=>$token]);
    }
    public function change_password(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);
     
        $status = Password::reset($request->only('email', 'password', 'password_confirmation', 'token'), function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ]);
                $user->save();
                // event(new PasswordReset($user));
            }   
        );
        
        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('front.login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }
}
