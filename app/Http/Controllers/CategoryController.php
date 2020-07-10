<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
    	$category = Category::all()->sortBydesc('id');
        $no = 0;
        return view('category.index', compact('category', 'no')); 
    }

    public function create(){
    	return view('category.create');
    }

    public function store(Request $request){
    	$category = new Category;
    	$category->category_name = $request->name;
    	$category->save();
    	return redirect('/buku');
    }

    public function destroy($id){
        $category = Category::find('id');
        $category->delete();
        return redirect('/category');
    }
}
