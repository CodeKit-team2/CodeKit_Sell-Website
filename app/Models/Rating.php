<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Rating
 *
 * @property int $id
 * @property int $one
 * @property int $two
 * @property int $three
 * @property int $four
 * @property int $five
 * @property int|null $product_id
 *
 * @property Product|null $product
 * @property Collection|Feedback[] $feedback
 *
 * @package App\Models
 */
class Rating extends Model
{

    use HasFactory;

	protected $table = 'rating';
	public $timestamps = false;

	protected $casts = [
		'one' => 'int',
		'two' => 'int',
		'three' => 'int',
		'four' => 'int',
		'five' => 'int',
		'product_id' => 'int'
	];

	protected $fillable = [
		'one',
		'two',
		'three',
		'four',
		'five',
		'product_id'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function feedback()
	{
		return $this->hasMany(Feedback::class);
	}
}
