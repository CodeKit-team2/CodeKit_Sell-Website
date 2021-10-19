<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Size
 * 
 * @property int $id
 * @property string|null $name
 * 
 * @property Collection|ProductColor[] $product_colors
 *
 * @package App\Models
 */
class Size extends Model
{
	protected $table = 'sizes';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function product_colors()
	{
		return $this->belongsToMany(ProductColor::class, 'product_color_sizes')
					->withPivot('id', 'name', 'quantity', 'price');
	}
}
