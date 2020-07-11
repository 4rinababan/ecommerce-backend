<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Validation\Rule;
use App\Helpers\Enums\Role;
use App\Helpers\Enums\UserStatus;
use Spatie\Activitylog\Traits\LogsActivity;

class User extends Authenticatable
{
	use Notifiable;
	use SoftDeletes;
	use LogsActivity;

	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password', 'phone', 'first_name', 'last_name', 'language', 'remark'
		// TODO : check column list on migration script, name or username?
	];

	protected static $logFillable = true;
	protected static $logOnlyDirty = true;

	/**
	 * The default value for attributes
	 */
	protected $attributes = [
		'role' => Role::CUSTOMER,
		'customer_group_id' => 0,
		'status' => UserStatus::ACTIVE,
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token', 'language',
	];

	public static function rules($id = 0, $merge = []) {
		$nameRule = ['required'];
		$emailRule = ['required'];
		return array_merge(
			[
				'name' => $nameRule,
				'email' => $emailRule,
				'phone' => 'nullable',
			],
			$merge
		);
	}

	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];

	public function customerGroup() {
		return $this->belongsTo(CustomerGroup::class);
	}
	public function attachments() {
		return $this->hasMany(Attachment::class);
	}
	public function wishlist() {
		return $this->belongsToMany(ProductVariant::class, 'wishlist', 'user_id', 'product_variant_id')->withTimestamp();
	}
	public function orders() {
		return $this->hasMany(Order::class);
	}
}
