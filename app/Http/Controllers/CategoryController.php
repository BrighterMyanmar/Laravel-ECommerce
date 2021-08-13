<?php

namespace App\Http\Controllers;

use App\BMLibby\Helper;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $cats = Category::all();
        return view('cats.index',compact('cats'));
    }

    public function create()
    {
        return view('cats.create');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        if($request->hasFile('file')){
            $image = Helper::saveSingleImage($request->file('file'));
            $cat = Category::create([
                "name" => $name,
                "image" => $image
            ]);
            if($cat){
                return redirect()->route('cats.index');
            }
        }
        return redirect()->route('cats.create')->with("error","Category Creation Fail!");
    }


    public function show(Category $category)
    {
        //
    }

    public function edit(Category $cat)
    {
       return view('cats.edit',compact('cat'));
    }


    public function update(Request $request, Category $cat)
    {
        $cat->name = $request->get('name');
        if($request->hasFile('file')){
            Helper::deleteFile($cat->image);
            $cat->image = Helper::saveSingleImage($request->file('file'));
        }
        if($cat->update()){
            return redirect()->route('cats.index');
        }
        return redirect()->route('cats.edit',$cat->id)->with("error","Category Update Fail!");
    }

    public function destroy(Category $cat)
    {
        Helper::deleteFile($cat->image);
        $cat->delete();
        return redirect()->route('cats.index');
    }
}
