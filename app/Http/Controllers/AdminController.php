<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Hash;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        $data['header_title'] = "Dashboard";
        return view('admin.dashboard.index', $data);
    }

    public function admin_list(){
        $data['getRecords'] = User::getAdmin();
        $data['header_title'] = 'Admin';
        return view('admin.admin_pages.admin_list', $data);
    }

    public function admin_add(){
        $data['header_title'] = 'Admin-Add';
        return view('admin.admin_pages.admin_add', $data);
    }

    public function insert_admin(Request $request){
        request()->validate([
            'email' => 'required|email|unique:users'
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->status = 0;
        $user->is_admin = 1;
        $user->save();
        return redirect('/admin_list')->with('success',"Admin created  successfully!!!");
    }

    public function edit_admin($id){
        $data['getRecords'] = User::getSingle($id);
        $data['header_title'] = 'Admin-Edit';
        return view('admin.admin_pages.admin_edit', $data);
    }

    public function update_edit_admin($id, Request $request){
        request()->validate([
            'email' => 'required|email|unique:users,email,'.$id
        ]);
        $user = User::getSingle($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }
        $user->status = $request->status;
        $user->is_admin = 1;
        $user->save();
        return redirect('/admin_list')->with('success',"Admin updated  successfully!!!");
    }
    public function delete_admin($id){
        $user = User::getSingle($id);
        $user->is_delete = 1;
        $user->save();
        return redirect('/admin_list')->with('success',"Admin deleted  successfully!!!");
    }
}