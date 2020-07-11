<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\DataTables\CategoriesDataTable;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CategoriesDataTable $dataTable)
    {
        return $dataTable->render('admin.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.categories.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Category::rules());
		$file = $request->file('logo') ?? null;
		$logo = null;
		if(!empty($file)) {
			$logo = Storage::putFileAs('public/category', $file, Str::slug($request->post('name')).".".$file->extension());
		}
		$categories = Category::create(array_merge($request->all(), ['logo' => $logo]));
		
		return redirect()->route("categories.index")->with('success', 'Category created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view("admin.categories.show", ["data" => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view("admin.categories.form", ["data" => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate(Category::rules($category->id));
		$file = $request->file('logo') ?? null;
		$logo = $category->logo;
		if(!empty($file)) {
			Storage::delete($category->logo);
			$logo = Storage::putFileAs('public/category', $file, Str::slug(empty($request->post('slug'))?$request->post('name'):$request->post('slug')).".".$file->extension());
		}
		$category->update(array_merge($request->all(), ['logo' => $logo]));

		return redirect()->route("categories.index")->with('success', 'Caetegory updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
		return redirect()->route("categories.index")->with('success', 'Category deleted successfully!');
    }
}
