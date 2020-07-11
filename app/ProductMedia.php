<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class ProductMedia extends Model {
	use SoftDeletes;
	use LogsActivity;

	protected $table = 'product_medias';

	protected $fillable = [
		'product_id', 'type', 'filename', 'description', 'sequence',
	];

	protected static $logFillable = true;
	protected static $logOnlyDirty = true;

	protected $rules = [
		'product_id' => 'required|exists:App\Product,id',
		'type' => [
			'required',
			// Rule::in(MediaType::getList()),
		],
		'filename' => 'required',
		'description' => 'nullable',
		'sequence' => 'nullable|numeric|between:0,100',
	];

	public function product() {
		return $this->belongsTo(Product::class);
	}
}