<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProductsList
 *
 * @property int $id
 * @property string $title_ru
 * @property string $title_en
 * @property string $image_path
 * @property string $icon_path
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsList query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsList whereIconPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsList whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsList whereImagePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsList whereTitleEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsList whereTitleRu($value)
 * @mixin \Eloquent
 */
class ProductsList extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_ru',
        'title_en',
        'image_path',
        'icon_path'
    ];
}
