<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class Review extends Model {
	use SoftDeletes;
	use LogsActivity;

	protected $table = 'reviews';

	protected $fillable = [
		'user_id', 'product_id', 'order_id', 'filename', 'rating', 'comment',
	];

	protected static $logFillable = true;
	protected static $logOnlyDirty = true;

	public function user() {
		return $this->belongsTo(User::class);
	}

	public function product() {
		return $this->belongsTo(Product::class);
	}

	public function Order() {
		return $this->belongsTo(Order::class);
	}
}
