<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

/**
 * Class Voucher
 *
 * @property int $id
 * @property string $discount_code
 * @property float $discount
 * @property string $state
 * @property Carbon $start
 * @property Carbon $end
 * @property string|null $content
 *
 * @property Collection|Product[] $products
 * @property Collection|Customer[] $customers
 *
 * @package App\Models
 */
class Voucher extends Model
{
    use HasFactory;

	protected $table = 'vouchers';
	public $timestamps = false;

	// protected $casts = [
	// 	'discount' => 'float'
	// ];

	protected $dates = [
		'start',
		'end'
	];

	protected $fillable = [
		'discount_code',
		'discount',
		'state',
		'start',
		'end',
		'content'
	];

	public function products()
	{
		return $this->belongsToMany(Product::class, 'product_vouchers');
	}

	public function customers()
	{
		return $this->belongsToMany(Customer::class, 'voucher_customers')
					->withPivot('id', 'count');
	}
}
