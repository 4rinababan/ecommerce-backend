<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;

class AdminController extends Controller {
	public function list() {
		$admin = User::select(['id', 'name', 'email','phone', 'deleted_at']);
		$result = [];
		$input = request()->all();

		if(isset($input['fields'])) {
			$fields = $input['fields'];
			$admin = User::select($fields);
		}

		if(isset($input['query']) && isset($input['query']['status'])) {
			if($input['query']['status'] == 'all') {
				$admin = $admin->withTrashed();
			} else if($input['query']['status'] == 'deleted') {
				$admin = $admin->onlyTrashed();
			}
		}

		if(isset($input['query']) && isset($input['query']['search'])) {
			$admin = $admin->where('name', 'like', '%'.$input['query']['search'].'%');
		}

		if(isset($input['sort']) && !empty($input['sort'])) {
			$admin = $admin->orderBy($input['sort']['field'], $input['sort']['sort']);
		}

		if(isset($input['pagination']) && !empty($input['pagination'])) {
			$page = isset($input['pagination']['page']) ? intval($input['pagination']['page'])-1 : 0;
			$pageSize = isset($input['pagination']['perpage']) ? intval($input['pagination']['perpage']) : 10;
			$total = $admin->count();
			$admin = $admin->skip($page*$pageSize)->take($pageSize);

			$meta = [
				"page" => $page+1,
				"pages" => ceil($total / $pageSize),
				"perpage" => $pageSize,
				"total" => $total,
			];
			$result['meta'] = $meta;
		}

		$admins = $admin->get();
		$result["data"] = $admins;
		return json_encode($result);
	}
}
