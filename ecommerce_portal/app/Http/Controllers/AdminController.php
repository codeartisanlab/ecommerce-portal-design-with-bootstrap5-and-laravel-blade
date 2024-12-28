<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   
    public function login(){
        return view('admin/login');
    }

    public function index(){
        return view('admin/index');
    }

    public function addcategory(){
        return view('admin/add-category');
    }

    public function viewcategory(){
        return view('admin/view-category');
    }

    public function editcategory(){
        return view('admin/edit-category');
    }

    public function users(){
        return view('admin/users');
    }

    public function vendors(){
        return view('admin/vendors');
    }

    public function orders(){
        return view('admin/orders');
    }

    public function orderdetail(){
        return view('admin/order-detail');
    }

    

    // public function products(){
    //     return view('admin/products');
    // }
}
