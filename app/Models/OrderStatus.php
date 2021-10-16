<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderStatus
 * 
 * @property int $id
 * @property string $status
 * 
 * @property Collection|Order[] $orders
 *
 * @package App\Models
 */
class OrderStatus extends Model
{
	protected $table = 'order_statuses';
	public $timestamps = false;

	protected $fillable = [
		'status'
	];

	public function orders()
	{
		return $this->hasMany(Order::class);
	}
}
