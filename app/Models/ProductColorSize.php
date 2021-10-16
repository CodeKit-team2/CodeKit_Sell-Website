<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductColorSize
 *
 * @property int $id
 * @property string|null $name
 * @property int $quantity
 * @property float $price
 * @property int|null $product_color_id
 * @property int|null $size_id
 *
 * @property ProductColor|null $product_color
 * @property Size|null $size
 * @property Collection|OrderProductInfor[] $order_product_infors
 *
 * @package App\Models
 */
class ProductColorSize extends Model
{
    use HasFactory;

	protected $table = 'product_color_sizes';
	public $timestamps = false;

	protected $casts = [
		'quantity' => 'int',
		'price' => 'float',
		'product_color_id' => 'int',
		'size_id' => 'int'
	];

	protected $fillable = [
		'name',
		'quantity',
		'price',
		'product_color_id',
		'size_id'
	];

	public function product_color()
	{
		return $this->belongsTo(ProductColor::class);
	}

	public function size()
	{
		return $this->belongsTo(Size::class);
	}

	public function order_product_infors()
	{
		return $this->hasMany(OrderProductInfor::class);
	}
}
