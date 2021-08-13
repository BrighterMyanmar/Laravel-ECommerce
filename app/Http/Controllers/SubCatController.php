<?php

namespace App\Http\Controllers;

use App\BMLibby\Helper;
use App\Models\Category;
use App\Models\SubCat;
use Illuminate\Http\Request;

class SubCatController extends Controller
{
    public function index()
    {
        $subcats = SubCat::all();
        return view('subcats.index', compact('subcats'));
    }

    public function create()
    {
        $cats = Category::all();
        return view('subcats.create', compact('cats'));
    }

    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = Helper::saveSingleImage($request->file('file'));
            $subcat = SubCat::create([
                'cat_id' => $request->get('cat_id'),
                'name' => $request->input('name'),
                'image' => $image
            ]);
            if ($subcat) {
                return redirect()->route('subcats.index');
            }
        }
        return redirect()->back()->with('error', "Category Creation Fail!");
    }

    public function show(SubCat $subCat)
    {
        //
    }

    public function edit(SubCat $subcat)
    {
        $cats = Category::all();
        return view('subcats.edit', compact('subcat', 'cats'));
    }

    public function update(Request $request, SubCat $subcat)
    {
        if ($request->hasFile('file')) {
            Helper::deleteFile($subcat->image);
            $subcat->image = Helper::saveSingleImage($request->file('file'));
        }

        $subcat->name = $request->input('name');
        $subcat->cat_id = $request->input('cat_id');

        if($subcat->update()){
            return redirect()->route('subcats.index');
        }
        return redirect()->back()->with('error', "Category Update Fail!");
    }

    public function destroy(SubCat $subcat)
    {
        $subcat->delete();
        return redirect()->route('subcats.index');

    }
}
