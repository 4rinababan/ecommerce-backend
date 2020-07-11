<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\DataTables\AdminsDataTable;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AdminsDataTable $dataTable)
    {
        return $dataTable->render('admin.admins.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.admins.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(User::rules());
		$file = $request;
		$admin = User::create(array_merge($request->all()));
		
		return redirect()->route("admins.index")->with('success', 'Admin created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view("admin.admins.show", ["data" => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view("admin.admins.form", ["data" => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate(User::rules());
		$file = $request;
		$admin = User::create(array_merge($request->all()));
		
		return redirect()->route("admins.index")->with('success', 'Admin Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
		return redirect()->route("admins.index")->with('success', 'Admin deleted successfully!');
    }
    public function dataList() {
		$category = Category::select(['id', 'name', 'logo', 'deleted_at']);
		$result = [];
		$input = request()->all();

		if(isset($input['fields'])) {
			$fields = $input['fields'];
			$category = Category::select($fields);
		}

		if(isset($input['query']) && isset($input['query']['status'])) {
			if($input['query']['status'] == 'all') {
				$category = $category->withTrashed();
			} else if($input['query']['status'] == 'deleted') {
				$category = $category->onlyTrashed();
			}
		}

		if(isset($input['query']) && isset($input['query']['search'])) {
			$category = $category->where('name', 'like', '%'.$input['query']['search'].'%');
		}

		if(isset($input['sort']) && !empty($input['sort'])) {
			if($input['sort']['field'] == 'RecordID') {
				$input['sort']['field'] = 'id';
			}
			$category = $category->orderBy($input['sort']['field'], $input['sort']['sort']);
		}

		if(isset($input['pagination']) && !empty($input['pagination'])) {
			$page = isset($input['pagination']['page']) ? intval($input['pagination']['page'])-1 : 0;
			$pageSize = isset($input['pagination']['perpage']) ? intval($input['pagination']['perpage']) : 10;
			$total = $category->count();
			$category = $category->skip($page*$pageSize)->take($pageSize);

			$meta = [
				"page" => $page+1,
				"pages" => ceil($total / $pageSize),
				"perpage" => $pageSize,
				"total" => $total,
			];
			$result['meta'] = $meta;
		}

		$category = $category->get();

		foreach($category as $cat) {
			$cat->logo = Storage::url($cat->logo);
		}

		$result["data"] = $category;
		return json_encode($result);
	}
}
