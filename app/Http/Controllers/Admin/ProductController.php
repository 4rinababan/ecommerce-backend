<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ProductController extends Controller {
	public function index() {
		return view("admin.product.list");
	}
}
