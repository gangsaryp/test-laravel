<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use PDO;

class CategoryController extends Controller
{
    //
    public function index(){
        $categories = Category::paginate(15);
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
    public function update($id, Request $request){
        $this->validate($request,[
            'name' => 'required'
        ]);

        $categories= Category::find($id);
        $categories->name = $request->name;
        $categories->save();
        return redirect('/categories');
    }
    public function delete($id){
        $categories = Category::find($id);
        $categories->delete();
        return redirect('categories');
    }
    public function cari(Request $request){
        $cari = $request->cari;

        $categories = Category::where('name','like',"%".$cari."%")->paginate();
        return view('categories',['categories'=>$categories]);
    }
}
