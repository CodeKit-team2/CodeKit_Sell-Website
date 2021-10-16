<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductVoucher
 *
 * @property int $product_id
 * @property int $voucher_id
 *
 * @property Product $product
 * @property Voucher $voucher
 *
 * @package App\Models
 */
class ProductVoucher extends Model
{

    use HasFactory;

	protected $table = 'product_vouchers';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int',
		'voucher_id' => 'int'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function voucher()
	{
		return $this->belongsTo(Voucher::class);
	}
}
