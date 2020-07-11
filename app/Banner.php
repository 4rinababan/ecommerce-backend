<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class Banner extends Model{
	use SoftDeletes;
	use LogsActivity;

	protected $table = 'banners';

	protected $fillable = [
		'name',
	];

	protected static $logFillable = true;
	protected static $logOnlyDirty = true;

	protected $rules = [
		'name' => 'required|unique',
	];

	public function medias() {
		return $this->hasMany(BannerMedia::class);
	}

	public function categories() {
		return $this->hasMany(Category::class);
	}
}
