<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Slugify;

class Product extends Model
{
    use Slugify;
    protected $fillable = [
        'title', 'slug', 'description', 'images_url', "is_featured", "price", "rating", "category_id"
    ];    

    protected $casts = [
        'images_url' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category')->withDefault();
    }
}
