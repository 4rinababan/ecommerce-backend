<?php

namespace App\Http\Controllers\Admin;

use App\CustomerGroup;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CustomerGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.customer-groups.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.customer-groups.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $allInput = request()->all();
		$validatedData = request()->validate(CustomerGroup::rules());
		$customerGroup = CustomerGroup::create($allInput);
		return redirect()->route("customer-groups.index")->with('success', 'Customer group created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CustomerGroup  $customerGroup
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerGroup $customerGroup)
    {
        return view("admin.customer-groups.show", ["data" => $customerGroup]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CustomerGroup  $customerGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerGroup $customerGroup)
    {
        return view("admin.customer-groups.edit", ["data" => $customerGroup]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CustomerGroup  $customerGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerGroup $customerGroup)
    {
        $allInput = request()->all();
		$validatedData = request()->validate(CustomerGroup::rules($customerGroup->id));
		$customerGroup->update($allInput);
		return redirect()->route("customer-groups.index")->with('success', 'Customer Group updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CustomerGroup  $customerGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerGroup $customerGroup)
    {
        $customerGroup->delete();
		return redirect()->route("customer-groups.index")->with('success', 'Customer Group deleted successfully!');
	}
	
	public function dataList() {
		$customerGroup = CustomerGroup::select(['id', 'name', 'description', 'deleted_at']);
		$result = [];
		$input = request()->all();

		if(isset($input['fields'])) {
			$fields = $input['fields'];
			$customerGroup = CustomerGroup::select($fields);
		}

		if(isset($input['query']) && isset($input['query']['status'])) {
			if($input['query']['status'] == 'all') {
				$customerGroup = $customerGroup->withTrashed();
			} else if($input['query']['status'] == 'deleted') {
				$customerGroup = $customerGroup->onlyTrashed();
			}
		}

		if(isset($input['query']) && isset($input['query']['search'])) {
			$customerGroup = $customerGroup->where('name', 'like', '%'.$input['query']['search'].'%');
		}

		if(isset($input['sort']) && !empty($input['sort'])) {
			if($input['sort']['field'] == 'RecordID') {
				$input['sort']['field'] = 'id';
			}
			$customerGroup = $customerGroup->orderBy($input['sort']['field'], $input['sort']['sort']);
		}

		if(isset($input['pagination']) && !empty($input['pagination'])) {
			$page = isset($input['pagination']['page']) ? intval($input['pagination']['page'])-1 : 0;
			$pageSize = isset($input['pagination']['perpage']) ? intval($input['pagination']['perpage']) : 10;
			$total = $customerGroup->count();
			$customerGroup = $customerGroup->skip($page*$pageSize)->take($pageSize);

			$meta = [
				"page" => $page+1,
				"pages" => ceil($total / $pageSize),
				"perpage" => $pageSize,
				"total" => $total,
			];
			$result['meta'] = $meta;
		}

		$customerGroups = $customerGroup->get();

		$result["data"] = $customerGroups;
		return json_encode($result);
	}
}
