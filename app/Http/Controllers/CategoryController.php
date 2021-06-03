<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use PDO;

class CategoryController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        return view('categories',['categories'=>$categories]);
    }
    public function tambah(){
        return view('tambahCategory');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required'
        ]);

        Category::create([
            'name'=>$request->name
        ]);

        return redirect('/categories');
    }
    public function edit($id){
        $categories = Category::find($id);
        return view('categoriesEdit',['categories' => $categories]);
    }
}
