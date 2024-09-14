<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    public function index(){
        $data['header_title'] = "Dashboard";
        return view('admin.dashboard.index', $data);
    }

    public function admin_list(){
        $data['header_title'] = 'Admin';
        return view('admin.admin_pages.admin_list', $data);
    }
}
