<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductColor
 *
 * @property int $id
 * @property string|null $image
 * @property int|null $product_id
 * @property int|null $color_id
 *
 * @property Color|null $color
 * @property Product|null $product
 * @property Collection|Size[] $sizes
 *
 * @package App\Models
 */
class ProductColor extends Model
{
    use HasFactory;

	protected $table = 'product_colors';
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int',
		'color_id' => 'int'
	];

	protected $fillable = [
		'image',
		'product_id',
		'color_id'
	];

	public function color()
	{
		return $this->belongsTo(Color::class);
	}

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function sizes()
	{
		return $this->belongsToMany(Size::class, 'product_color_sizes')
					->withPivot('id', 'name', 'quantity', 'price');
	}
}
