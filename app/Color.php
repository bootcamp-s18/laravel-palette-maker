<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //
    public function palettes() {
    	return $this->belongsToMany('\App\Palette');
    }
}
