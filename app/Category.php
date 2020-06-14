<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'image_url'
    ];
    protected $hidden = ['updated_at', 'created_at'];
    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
