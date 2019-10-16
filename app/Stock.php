<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Voyager;

class Stock extends Model
{
    public static function getStocks()
    {
        return self::limit(10)->get();
    }

    public function getPhoto()
    {
        return Voyager::image($this->photo);
    }
}
