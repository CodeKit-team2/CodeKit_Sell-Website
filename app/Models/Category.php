<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @property int $id
 * @property string|null $type_name
 *
 * @property Collection|SubCategory[] $sub_categories
 *
 * @package App\Models
 */
class Category extends Model
{
	protected $table = 'categories';
	public $timestamps = false;

	protected $fillable = [
		'type'
	];

	public function sub_categories()
	{
		return $this->hasMany(SubCategory::class);
	}
}
