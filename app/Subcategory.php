<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Voyager;

class Subcategory extends Model
{
    public function getPhoto()
    {
        return Voyager::image($this->photo);
    }
}
