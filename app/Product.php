<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Product extends Model {
	use SoftDeletes;
	use HasSlug;
	use LogsActivity;

	protected $table = 'products';

	protected $fillable = [
		'name', 'serial_number', 'SPU', 'SKU', 'supplier_id', 'brand_id', 'price', 'description',
		'is_on_sale', 'is_new', 'is_recommended',
	];

	protected static $logFillable = true;
	protected static $logOnlyDirty = true;

	protected $rules = [
		'name' => 'required',
		'serial_number' => 'nullable',
		'SPU' => 'nullable',
		'SKU' => 'nullable',
		'description' => 'nullable',
		'price' => 'required|numeric|min:0.01',
		'supplier_id' => 'nullable|exists:App\Supplier,id',
		'brand_id' => 'nullable|exists:App\Brand,id',
		'is_on_sale' => 'required|in:0,1',
		'is_new' => 'required|in:0,1',
		'is_recommended' => 'required|in:0,1',
	];

	/**
	 * Get the options for generating the slug.
	 */
	public function getSlugOptions() : SlugOptions {
		return SlugOptions::create()
			->generateSlugsFrom('name')
			->saveSlugsTo('slug');
	}

	public function supplier() {
		return $this->belongsTo(Supplier::class);
	}

	public function brand() {
		return $this->belongsTo(Brand::class);
	}

	public function categories() {
		return $this->belongsToMany(Category::class, 'product_categories', 'product_id', 'category_id');
	}

	public function review() {
		return $this->hasMany(Review::class);
	}

	public function rating() {
		return $this->review()->whereNotNull('order_id');
	}

	public function rating() {
		return $this->review()->whereNull('order_id');
	}
}
