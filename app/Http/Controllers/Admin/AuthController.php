<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Hash;
use Mail;
use App\Mail\RegisterMail;

class AuthController extends Controller
{
    public function login_admin()
    {
        // dd(Hash::make('password'));
        if(!empty(Auth::check()) && Auth::user()->is_admin == 1){
            return redirect('/admin_dashboard');
        }
        elseif(!empty(Auth::check()) && Auth::user()->is_admin == 0){
            return redirect('/home');
        }
        return view('admin.auth.login');
    }

    public function auth_login_admin(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => 1, 'status' => 0, 'is_delete' => 0], $remember)){
            return redirect('/admin_dashboard');
        }
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => 0, 'status' => 0, 'is_delete' => 0], $remember)){
            return redirect('/home');
        }
        else{
            return redirect()->back()->with('error',"Please enter correct email and password");
        }
    }

    public function log_out(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->flush();
 
        return redirect('/');
    }

    public function auth_login(Request $request){
        $remember = !empty($request->is_remember) ? true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 0, 'is_delete' => 0], $remember)){
            if(!empty(Auth::user()->email_verified_at)){
                $json['status'] = true;
                $json['message'] = 'success';
            }
            else{
                $user = User::getSingle(Auth::user()->id);
                Mail::to($user->email)->send(new RegisterMail($user));
                Auth::logout();
                $json['status'] = false;
                $html = 'Your account email is not verified. Please check your inbox and verify your account.';
                $json['html'] = $html;
            }

        }
        else{
            $json['status'] = false;
            $html = 'Please enter correct email and password';
            $json['html'] = $html;
        }
        echo json_encode($json);
    }
}
