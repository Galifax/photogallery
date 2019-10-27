<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Voyager;

class Requisite extends Model
{
    public static function getGalleries()
    {
        return self::orderBy('sort_order')
            ->paginate(20);
    }

    public function getPhoto()
    {
        return Voyager::image($this->photo);
    }

}
