<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Middleware\AdminMiddleware;

//welcome route..... 
route::get('/',[LandingPageController::class, 'welcome']);

//AuthController Routes Goes Here...
route::get('/login',[AuthController::class, 'login_admin']);
route::post('/login',[AuthController::class, 'auth_login_admin']);
route::get('/log_out',[AuthController::class, 'log_out']);

// AdminController Routes Goes Here...
route::get('/admin_dashboard',[AdminController::class, 'index'])->middleware('is_admin');
route::get('/admin_list',[AdminController::class, 'admin_list'])->middleware('is_admin');
route::get('/admin_add',[AdminController::class, 'admin_add'])->middleware('is_admin');
route::post('/admin_add',[AdminController::class, 'insert_admin'])->middleware('is_admin');
route::get('/admin_edit/{id}',[AdminController::class, 'edit_admin'])->middleware('is_admin');
route::post('/admin_edit/{id}',[AdminController::class, 'update_edit_admin'])->middleware('is_admin');
route::get('/admin_delete/{id}',[AdminController::class, 'delete_admin'])->middleware('is_admin');

//MemberController Routes Goes Here....
route::get('/member_list',[MemberController::class, 'member_list'])->middleware('is_admin');
route::get('/member_add',[MemberController::class, 'member_add'])->middleware('is_admin');
route::post('/member_add',[MemberController::class, 'insert_member'])->middleware('is_admin');
route::get('/member_edit/{id}',[MemberController::class, 'edit_member'])->middleware('is_admin');
route::post('/member_edit/{id}',[MemberController::class, 'update_edit_member'])->middleware('is_admin');
route::get('/member_delete/{id}',[MemberController::class, 'delete_member'])->middleware('is_admin');

//CategoryController Routes Goes Here....
route::get('/category_list',[CategoryController::class, 'category_list'])->middleware('is_admin');
route::get('/category_add',[CategoryController::class, 'category_add'])->middleware('is_admin');
route::post('/category_add',[CategoryController::class, 'insert_category'])->middleware('is_admin');
route::get('/category_edit/{id}',[CategoryController::class, 'edit_category'])->middleware('is_admin');
route::post('/category_edit/{id}',[CategoryController::class, 'update_edit_category'])->middleware('is_admin');
route::get('/category_delete/{id}',[CategoryController::class, 'delete_category'])->middleware('is_admin');

//SubCategoryController Routes Goes Here...
route::get('/sub_category_list',[SubCategoryController::class, 'sub_category_list'])->middleware('is_admin');
route::get('/sub_category_add',[SubCategoryController::class, 'sub_category_add'])->middleware('is_admin');
route::post('/sub_category_add',[SubCategoryController::class, 'insert_sub_category'])->middleware('is_admin');
route::get('/sub_category_edit/{id}',[SubCategoryController::class, 'edit_sub_category'])->middleware('is_admin');
route::post('/sub_category_edit/{id}',[SubCategoryController::class, 'update_edit_sub_category'])->middleware('is_admin');
route::get('/sub_category_delete/{id}',[SubCategoryController::class, 'delete_sub_category'])->middleware('is_admin');

//HomeController Routes Goes Here.....
route::get('/home',[HomeController::class, 'index']);