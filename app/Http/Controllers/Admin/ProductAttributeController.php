<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class ProductAttributeController extends Controller
{
    public function index(){
        return view('admin.product_attribute.create');
    }

    public function manage(){
        return view('admin.product_attribute.manage');
    }
}
