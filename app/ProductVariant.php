<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class ProductVariant extends Model {
	use SoftDeletes;
	use LogsActivity;

	protected $table = 'product_variants';

	protected $fillable = [
		'product_id', 'name', 'serial_number', 'SKU', 'filename', 'parent_id', 'price', 'quantity',
	];

	protected static $logFillable = true;
	protected static $logOnlyDirty = true;

	protected $rules = [
		'product_id' => 'required|exists:App\Product,id',
		'name' => 'required',
		'serial_number' => 'nullable',
		'SKU' => 'nullable',
		'filename' => 'nullable',
		'parent_id' => 'nullable|exists:App\ProductVariant,id',
		'price' => 'required|numeric|min:0.01',
		'quantity' => 'nullable|numeric|min:0',
	];

	public function product() {
		return $this->belongsTo(Product::class);
	}

	public function wishlist() {
		return $this->belongsToMany(User::class, 'wishlist', 'variant_id', 'user_id')->withTimestamp();
	}
}