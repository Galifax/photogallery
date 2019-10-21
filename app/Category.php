<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Voyager;

class Category extends Model
{
    public static function getCategories()
    {
        return Category::get();
    }
    public static function getBySlug($slug)
    {
        return Category::where('slug', $slug)
            ->with('subcategory')
            ->firstOrFail();
    }

    public function gallery()
    {
        return $this->hasMany('\App\Gallery', 'category_id', 'id');
    }

    public function subcategory()
    {
        return $this->hasMany('\App\Subcategory', 'category_id', 'id');
    }

    public function getPhoto()
    {
        return Voyager::image($this->photo);
    }

}
