<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get()->sortByDesc('id');
        return view('category.index', [
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->slug == NULL || $request->slug == "") {
            $slug = Str::slug($request->title);
        } else {
            $slug = $request->slug;
        }

        $filename = time() . '-' . $slug . '.' . $request->image->extension();
        $request->image->storeAs('public/images/', $filename);

        Category::create([
            'title' => $request->title,
            'slug' => $slug,
            'description' => $request->description,
            'image' => $filename
        ]);

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        if($request->slug == NULL || $request->slug == "") {
            $slug = Str::slug($request->title);
        } else {
            $slug = $request->slug;
        }

        if($request->image) {
            $filename = time() . '-' . $slug . '.' . $request->image->extension();
            $request->image->storeAs('public/images/', $filename);
        }

//        $category->update([
//            'title' => $request->title,
//            'slug' => $slug,
//            'description' => $request->description,
//        ]);

        $category->title = $request->title;
        $category->slug = $slug;
        $category->description = $request->description;
        if($request->image) {
            $category->image = $filename;
        }
        $category->save();

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }
}
