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
 * Class Order
 *
 * @property int $id
 * @property int|null $cost
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $order_status_id
 * @property string|null $comment
 * @property int|null $customer_id
 *
 * @property Customer|null $customer
 * @property OrderStatus $order_status
 * @property Collection|OrderProductInfor[] $order_product_infors
 *
 * @package App\Models
 */
class Order extends Model
{
    use HasFactory;


	protected $table = 'orders';

	protected $casts = [
		'cost' => 'int',
		'order_status_id' => 'int',
		'customer_id' => 'int'
	];

	protected $fillable = [
		'cost',
		'order_status_id',
		'comment',
		'customer_id'
	];

	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}

	public function order_status()
	{
		return $this->belongsTo(OrderStatus::class);
	}

	public function order_product_infors()
	{
		return $this->hasMany(OrderProductInfor::class, 'oder_id');
	}
}
