<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class OrderDetail extends Model {
	use SoftDeletes;
	use LogsActivity;

	protected $table = 'order_details';

	protected $fillable = [
		'order_id', 'product_variant_id', 'product_json', 'product_variant_json', 'sub_price', 'quantity',
	];

	protected static $logFillable = true;
	protected static $logOnlyDirty = true;

	protected $rules = [
		'order_id' => 'required|exists:App\Order,id',
		'product_variant_id' => 'required|exists:App\ProductVariant,id',
		'product_json' => 'required|json',
		'product_variant_json' => 'required|json',
		'sub_price' => 'required|numeric|min:0.01',
		'quantity' => 'required|numeric|min:1',
	];

	public function order() {
		return $this->belongsTo(Order::class);
	}

	public function productVariant() {
		return $this->belongsTo(ProductVariant::class);
	}

	public function product() {
		return $this->hasOneThrough(Product::class, ProductVariant::class);
	}
}