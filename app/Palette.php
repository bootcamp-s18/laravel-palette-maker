<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Palette extends Model
{

    public function colors() {
    	return $this->belongsToMany('\App\Color');
    }

    public function unusedColors() {

    	$allColors = \App\Color::all();

    	$unusedColors = $allColors->diff($this->colors);

    	return $unusedColors;
    }

}

