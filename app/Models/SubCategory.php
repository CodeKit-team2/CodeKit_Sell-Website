<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SubCategory
 *
 * @property int $id
 * @property string|null $name
 * @property int $gender
 * @property int|null $category_id
 *
 * @property Category|null $category
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class SubCategory extends Model
{
    use HasFactory;

	protected $table = 'sub_categories';
	public $timestamps = false;

	protected $casts = [
		'gender' => 'int',
		'category_id' => 'int'
	];

	protected $fillable = [
		'name',
		'gender',
		'category_id'
	];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function products()
	{
		return $this->hasMany(Product::class);
	}
}
