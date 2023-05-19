<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        $categories = Category::get();
        return view('categories.all-categories',compact('categories'));
    }

    public function store(Request $request){
        $categories = new Category();
        $categories->name = $request->category_name;
        $categories->save();
        $action=0;
        return redirect()->back()->with('action');
    }

    public function distroy($id){
        Category::where('id',$id)->delete();
        $categories->save();
        return redirect()->back();
    }

    public function goingToTheUpdate($id){
        $categories=Category::where('id',$id)->get();
        $action=1;
        return view('categories.create_Category',compact(['categories','action']));
    }

    public function update($id){
        Category::where('id',$id)
        ->update([
        'name'=>$_POST['category_name']
    ]);
        $categories->save();
        $categories = Category::get();
        return view('categories.all-categories',compact('categories'));
    }
}
