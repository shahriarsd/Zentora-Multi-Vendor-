<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class SubcategoryController extends Controller
{

public function index(){
    return view('admin.sub_category.create');
}
}

