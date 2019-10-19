<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    public static function getCategories()
    {
        return Category::get();
    }
    public static function getBySlug($slug)
    {
        return Category::where('slug', $slug)
            ->firstOrFail();
    }

    public function gallery()
    {
        return $this->hasMany('\App\Gallery', 'category_id', 'id');
    }

}
