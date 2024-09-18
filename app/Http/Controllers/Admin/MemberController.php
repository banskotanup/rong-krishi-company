<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function member_list(){
        $data['getRecords'] = User::getMember();
        $data['header_title'] = 'Member';
        return view('admin.member_pages.member_list', $data)->with('no', 1);
    }

    public function member_add(){
        $data['header_title'] = 'Member-Add';
        return view('admin.member_pages.member_add', $data);
    }

    public function insert_member(Request $request){
        request()->validate([
            'email' => 'required|email|unique:users'
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->status = 0;
        $user->is_admin = 0;
        $user->save();
        return redirect('/member_list')->with('success',"Member created  successfully!!!");
    }

    public function edit_member($id){
        $data['getRecords'] = User::getSingle($id);
        $data['header_title'] = 'Member-Edit';
        return view('admin.member_pages.member_edit', $data);
    }

    public function update_edit_member($id, Request $request){
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
        $user->is_admin = 0;
        $user->save();
        return redirect('/member_list')->with('success',"Member updated  successfully!!!");
    }

    public function delete_member($id){
        $user = User::getSingle($id);
        $user->is_delete = 1;
        $user->save();
        return redirect('/member_list')->with('success',"Member deleted  successfully!!!");
    }
}
