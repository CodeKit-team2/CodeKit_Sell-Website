<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderProductInfor
 *
 * @property int $id
 * @property int|null $quantity
 * @property string|null $comment
 * @property int|null $oder_id
 * @property int|null $feedback_id
 * @property int|null $product_color_size_id
 * @property int|null $discount
 * @property int $price_after_discount
 *
 * @property Feedback|null $feedback
 * @property Order|null $order
 * @property ProductColorSize|null $product_color_size
 *
 * @package App\Models
 */
class OrderProductInfor extends Model
{
    use HasFactory;

	protected $table = 'order_product_infors';
	public $timestamps = false;

	protected $casts = [
		'quantity' => 'int',
		'oder_id' => 'int',
		'feedback_id' => 'int',
		'product_color_size_id' => 'int',
		'discount' => 'int',
		'price_after_discount' => 'int'
	];

	protected $fillable = [
		'quantity',
		'comment',
		'oder_id',
		'feedback_id',
		'product_color_size_id',
		'discount',
		'price_after_discount'
	];

	public function feedback()
	{
		return $this->belongsTo(Feedback::class);
	}

	public function order()
	{
		return $this->belongsTo(Order::class, 'oder_id');
	}

	public function product_color_size()
	{
		return $this->belongsTo(ProductColorSize::class);
	}
}
