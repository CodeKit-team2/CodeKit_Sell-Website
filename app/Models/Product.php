<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property int $id
 * @property string $name
 * @property string|null $discrible
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int|null $sub_category_id
 * @property int|null $material_id
 *
 * @property Material|null $material
 * @property SubCategory|null $sub_category
 * @property Collection|Feedback[] $feedback
 * @property Collection|Color[] $colors
 * @property Collection|Voucher[] $vouchers
 * @property Collection|Rating[] $ratings
 *
 * @package App\Models
 */
class Product extends Model
{
    use HasFactory;

	protected $table = 'products';

	protected $casts = [
		'sub_category_id' => 'int',
		'material_id' => 'int'
	];

	protected $fillable = [
		'name',
		'discription',
		'sub_category_id',
		'material_id'
	];

	public function material()
	{
		return $this->belongsTo(Material::class);
	}

	public function sub_category()
	{
		return $this->belongsTo(SubCategory::class);
	}

	public function feedback()
	{
		return $this->hasMany(Feedback::class, 'rated_product_id');
	}

	public function colors()
	{
		return $this->belongsToMany(Color::class, 'product_colors')
					->withPivot('id', 'image');
	}

	public function vouchers()
	{
		return $this->belongsToMany(Voucher::class, 'product_vouchers');
	}

	public function ratings()
	{
		return $this->hasMany(Rating::class);
	}
}
