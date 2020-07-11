<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Helpers\Enums\TransactionStatus;
use Spatie\Activitylog\Traits\LogsActivity;

class Order extends Model {
	use SoftDeletes;
	use LogsActivity;

	protected $table = 'orders';

	protected $fillable = [
		'order_code', 'user_id', 'status',
		// TODO: recipient and address related
		'recipient_name', 'recipient_phone', 'address_desc', 'postal_code',
		// TODO: delivery related
		// 'driver_name',
		// TODO: delivery_fee
		'delivery_fee',
		// TODO: discount campaign related
		// 'coupon_id', 'discount_total',
		// TODO: grand_total
		// 'grand_total',
		'user_remark', 'admin_remark',
	];

	protected static $logFillable = true;
	protected static $logOnlyDirty = true;

	protected $rules = [
		'order_code' => 'required', // TODO : unique validation on controller during update to ignore own https://laravel.com/docs/7.x/validation#rule-unique
		'user_id' => 'required|exists:App\User,id',
		'type' => [
			'required',
			// Rule::in(TransactionStatus::getList()),
		], // TODO: Fix the list on TransactionStatus
		'sequence' => 'nullable|numeric|between:0,100',
	];

	public function user() {
		return $this->belongsTo(User::class);
	}

	public function details() {
		return $this->hasMany(OrderDetail::class);
	}

	public function review() {
		return $this->hasOne(Review::class);
	}
}
