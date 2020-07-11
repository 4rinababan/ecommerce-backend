<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SettingController extends Controller {
	public function index() {
		if(request()->isMethod("post")) {
			$postData = request()->post();
			unset($postData["_token"]);
			$replacedKeys = str_replace('_', '.', array_keys($postData));
			$postData = array_combine($replacedKeys, $postData);
			setting($postData)->save();
		}
		$smtp = setting()->get('smtp');
		return view("admin.setting.index", ['smtp' => $smtp]);
	}
}
