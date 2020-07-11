<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\DataTables\BrandsDataTable;

class BrandController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(BrandsDataTable $dataTable) {
		return $dataTable->render('admin.brands.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view("admin.brands.form");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$request->validate(Brand::rules());
		$file = $request->file('logo') ?? null;
		$logo = null;
		if(!empty($file)) {
			$logo = Storage::putFileAs('public/brand', $file, Str::slug($request->post('name')).".".$file->extension());
		}
		$brand = Brand::create(array_merge($request->all(), ['logo' => $logo]));
		
		return redirect()->route("brands.index")->with('success', 'Brand created successfully!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Brand  $brand
	 * @return \Illuminate\Http\Response
	 */
	public function show(Brand $brand)
	{
		return view("admin.brands.show", ["data" => $brand]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Brand  $brand
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Brand $brand)
	{
		return view("admin.brands.form", ["data" => $brand]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Brand  $brand
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Brand $brand)
	{
		$request->validate(Brand::rules($brand->id));
		$file = $request->file('logo') ?? null;
		$logo = $brand->logo;
		if(!empty($file)) {
			Storage::delete($brand->logo);
			$logo = Storage::putFileAs('public/brand', $file, Str::slug(empty($request->post('slug'))?$request->post('name'):$request->post('slug')).".".$file->extension());
		}
		$brand->update(array_merge($request->all(), ['logo' => $logo]));

		return redirect()->route("brands.index")->with('success', 'Brand updated successfully!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Brand  $brand
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Brand $brand)
	{
		$brand->delete();
		return redirect()->route("brands.index")->with('success', 'Brand deleted successfully!');
	}
}
