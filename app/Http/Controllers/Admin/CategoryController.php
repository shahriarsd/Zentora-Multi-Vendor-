<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.create');
    }

    public function manage(){
        $categories = Category::all();
        return view('admin.category.manage', compact('categories'));
    }
}
