<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;

class MasterSubcategoryController extends Controller
{

public function storesubcat(Request $request){
    $validate_data = $request->validate([
        'subcategory_name'=>'required|max:100|min:5',
        'category_id'=>'required|exists:categories,id'
    ]);

    // dd($validate_data);

    Subcategory::create($validate_data );

    return redirect()->back()->with('manage', 'Subcategory created successfully');

}


    public function showsubcat($id){
        $subcategory_info = Subcategory::find($id);
        return view('admin.sub_category.edit', compact('subcategory_info'));
    }

    public function updatesubcat(Request $request, $id){
     $subcategory= Subcategory::findorFail($id);
      $validate_data = $request->validate([
        'subcategory_name'=>'required|unique:subcategories,subcategory_name,'.$subcategory->id.'|max:100|min:5',
    ]);

        $subcategory->update($validate_data);
        return redirect()->back()->with('message', 'Sub Category updated successfully');

    }

    public function deletesubcat($id){
        Subcategory::findorFail($id)->delete();
        return redirect()->back()->with('message', 'Sub category deleted successfully');

    }


}

