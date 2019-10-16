<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Voyager;

class Gallery extends Model
{
    public static function getGalleries()
    {
        return self::paginate(20);
    }

    public static function getLastWorks()
    {
        return self::paginate(10);
    }
    public function getPhoto()
    {
        return Voyager::image($this->photo);
    }

}
