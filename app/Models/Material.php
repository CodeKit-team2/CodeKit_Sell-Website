<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Material
 *
 * @property int $id
 * @property string|null $name
 *
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class Material extends Model
{
    use HasFactory;

	protected $table = 'materials';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function products()
	{
		return $this->hasMany(Product::class);
	}
}
