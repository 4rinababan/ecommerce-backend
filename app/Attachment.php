<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Validation\Rule;
use App\Helpers\Enums\AttachmentType;
use Spatie\Activitylog\Traits\LogsActivity;

class Attachment extends Model {
	use SoftDeletes;
	use LogsActivity;

	protected $table = 'attachments';

	protected $fillable = [
		'user_id', 'type', 'filename',
	];

	protected static $logFillable = true;
	protected static $logOnlyDirty = true;

	protected $rules = [
		'user_id' => 'required|exists:App\User,id',
		'type' => [
			'required',
			// Rule::in(AttachmentType::getList()),
		],
		'filename' => 'required',
	];

	public function user() {
		return $this->belongsTo(User::class);
	}
}
