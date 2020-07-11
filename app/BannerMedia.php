<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Validation\Rule;
use App\Helpers\Enums\BannerActionType;
use Spatie\Activitylog\Traits\LogsActivity;

class BannerMedia extends Model{
	use SoftDeletes;
	use LogsActivity;

	protected $table = 'banner_medias';

	protected $fillable = [
		'banner_id', 'type', 'filename', 'action_type', 'action_target',
	];

	protected static $logFillable = true;
	protected static $logOnlyDirty = true;

	protected $rules = [
		'banner_list_id' => 'required|exists:App\Banner,id',
		'filename' => 'required',
		'type' => [
			'required',
			// Rule::in(MediaType::getList()),
		],
		'action_type' => [
			'required',
			// Rule::in(BannerActionType::getList()),
		],
		'action_target' => 'required',
	];

	public function list() {
		return $this->belongsTo(BannerList::class);
	}
}
