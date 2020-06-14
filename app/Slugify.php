<?php

namespace App;

use Illuminate\Support\Str;

/**
 * 
 */
trait Slugify
{
    protected static function bootSlugify()
    {
        static::creating(function ($model) {
            $model->slug = $model->uniqSlug($model[$model->slugifyKey()]);
        });
    }

    protected static function uniqSlug($title)
    {
        $slug = Str::slug($title, '_');

        $previousCount = app(static::class)->where('slug', 'LIKE', "$slug%")->count();

        if ($previousCount > 0) {
            $count = $previousCount + 1;
            $slug = $slug . '_' . $count;
        }
        return $slug;
    }

    protected function slugifyKey(){
        return 'title';
    }
}
