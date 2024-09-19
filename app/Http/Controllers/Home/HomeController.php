<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['meta_title'] = 'Rong Krishi Company';
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';
        return view('index', $data);
    }
}
