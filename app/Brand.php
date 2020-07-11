<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Validation\Rule;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Brand extends Model {
	use SoftDeletes;
	use HasSlug;
	use LogsActivity;

	protected $table = 'brands';

	protected $fillable = [
		'name', 'slug', 'logo', 'description', 'website', 'sequence', 'is_hot',
		// website is for URL to brand's own website if it exists, so that user can check further details of brands too.
	];

	protected static $logFillable = true;
	protected static $logOnlyDirty = true;

	protected $attributes = [
		'sequence' => 50,
		'is_hot' => 0,
	];

	public static function rules($id = 0, $merge = []) {
		$nameRule = ['required'];
		$logoRule = ['image'];
		if($id == 0) {
			$logoRule[] = 'required';
			$nameRule[] = Rule::unique('brands', 'name');
		} else {
			$logoRule[] = 'nullable';
			$nameRule[] = Rule::unique('brands', 'name')->ignore($id);
		}
		return array_merge(
			[
				'name' => $nameRule,
				'logo' => $logoRule,
				'description' => 'nullable',
				'website' => 'nullable',
				'sequence' => 'nullable|numeric|between:0,100',
				'is_hot' => 'nullable|in:0,1',
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
		return $this->hasMany(Product::class);
	}
}
