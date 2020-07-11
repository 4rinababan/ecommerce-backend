<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Validation\Rule;
use Spatie\Activitylog\Traits\LogsActivity;

class CustomerGroup extends Model {
	use SoftDeletes;
	use LogsActivity;

	protected $table = 'customer_groups';

	protected $fillable = [
		'name', 'description'
	];

	protected static $logFillable = true;
	protected static $logOnlyDirty = true;

	public static function rules($id = 0, $merge=[]) {
		$nameRule = ['required'];
		$descRule = ['required'];
		if($id == 0) {
			$nameRule[] = Rule::unique('customer_groups', 'name');
		} else {
			$nameRule[] = Rule::unique('customer_groups', 'name')->ignore($id);
		}
		return array_merge(
			[
				'name' => $nameRule,
				'description' => 'required',
			],
			$merge
		);
	}

	public function customers() {
		return $this->hasMany(User::class);
	}
}
