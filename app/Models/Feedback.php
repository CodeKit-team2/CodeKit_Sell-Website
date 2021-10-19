<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Feedback
 *
 * @property int $id
 * @property string $comment
 * @property int|null $rated_product_id
 * @property int|null $rating_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Product|null $product
 * @property Rating|null $rating
 * @property Collection|OrderProductInfor[] $order_product_infors
 * @property Collection|Reply[] $replies
 *
 * @package App\Models
 */
class Feedback extends Model
{
    use HasFactory;

	protected $table = 'feedbacks';

	protected $casts = [
		'rated_product_id' => 'int',
		'rating_id' => 'int'
	];

	protected $fillable = [
		'comment',
		'rated_product_id',
		'rating_id'
	];

	public function product()
	{
		return $this->belongsTo(Product::class, 'rated_product_id');
	}

	public function rating()
	{
		return $this->belongsTo(Rating::class);
	}

	public function order_product_infors()
	{
		return $this->hasMany(OrderProductInfor::class);
	}

	public function replies()
	{
		return $this->hasMany(Reply::class);
	}
}
