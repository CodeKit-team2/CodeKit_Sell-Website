<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Color
 *
 * @property int $id
 * @property string $code
 * @property string|null $name
 *
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class Color extends Model
{
    use HasFactory;
	protected $table = 'colors';
	public $timestamps = false;

	protected $fillable = [
		'code',
		'name'
	];

	public function products()
	{
		return $this->belongsToMany(Product::class, 'product_colors')
					->withPivot('id', 'image');
	}
}
