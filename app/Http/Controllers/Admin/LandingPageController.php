<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
    public function welcome()
    {
        $data['meta_title'] = 'Rong Krishi Company';
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';
        if(!empty(Auth::check()) && Auth::user()->is_admin == 1){
            return redirect('/admin_dashboard');
        }
        return view('index', $data);
    }
}
