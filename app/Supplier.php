<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class Supplier extends Model {
	use SoftDeletes;
	use LogsActivity;

	protected $table = 'suppliers';

	protected $fillable = [
		'name', 'description', 'pic', 'phone', 'address_desc', 'postal_code', 'user_id',
	];

	protected static $logFillable = true;
	protected static $logOnlyDirty = true;

	protected $rules = [
		'name' => 'required', // TODO : unique validation on controller during update to ignore own https://laravel.com/docs/7.x/validation#rule-unique
		'description' => 'nullable',
		'pic' => 'required',
		'phone' => 'required',
		'address_desc' => 'required',
		'postal_code' => 'required',
		'user_id' => 'nullable|exists:App\User,id',
	];

	public function user() {
		return $this->belongsTo(User::class);
	}

	public function products() {
		return $this->hasMany(Product::class);
	}
}
