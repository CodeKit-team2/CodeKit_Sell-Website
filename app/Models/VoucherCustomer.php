<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherCustomer extends Model
{
    use HasFactory;

    protected $table = 'voucher_customers';
	public $timestamps = false;

	protected $casts = [
		'customer_id' => 'int',
		'count' => 'int',
		'voucher_id' => 'int'
	];

	protected $fillable = [
		'customer_id',
		'count',
		'voucher_id'
	];

	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}

	public function voucher()
	{
		return $this->belongsTo(Voucher::class);
	}
}
