<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class Category extends Model {
	use SoftDeletes;
	use HasSlug;
	use LogsActivity;

	protected $table = 'categories';
	protected $attributes = [
		'sequence' => 50,
	];


	protected $fillable = [
		'name', 'slug', 'logo', 'description', 'banner_id', 'sequence', 
	];

	protected static $logFillable = true;
	protected static $logOnlyDirty = true;

	public static function rules($id = 0, $merge = []) {
		$nameRule = ['required'];
		$logoRule = ['image'];
		if($id == 0) {
			$logoRule[] = 'required';
			$nameRule[] = Rule::unique('categories', 'name');
		} else {
			$logoRule[] = 'nullable';
			$nameRule[] = Rule::unique('categories', 'name')->ignore($id);
		}
		return array_merge(
			[
				'name' => $nameRule,
				'logo' => $logoRule,
				'description' => 'nullable',
				'sequence' => 'nullable|numeric|between:0,100',
				
			],
			$merge
		);
	}

	/**
	 * Get the options for generating the slug.
	 */
	public function getSlugOptions() : SlugOptions {
		return SlugOptions::create()
			->generateSlugsFrom('name')
			->saveSlugsTo('slug');
	}

	public function products() {
		return $this->belongsToMany(Product::class, 'product_category', 'category_id', 'product_id');
	}

	public function bannerList() {
		return $this->belongsTo(BannerList::class);
	}
}
