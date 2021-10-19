<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

/**
 * Class Reply
 *
 * @property int $id
 * @property string|null $content
 * @property int|null $feedback_id
 *
 * @property Feedback|null $feedback
 *
 * @package App\Models
 */
class Reply extends Model
{
    use HasFactory;

	protected $table = 'replies';
	public $timestamps = false;

	protected $casts = [
		'feedback_id' => 'int'
	];

	protected $fillable = [
		'content',
		'feedback_id'
	];

	public function feedback()
	{
		return $this->belongsTo(Feedback::class);
	}
}
