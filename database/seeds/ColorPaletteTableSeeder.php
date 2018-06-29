<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ColorPaletteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
		$red = DB::table('colors')->select('id')->where('name', '=', 'Red')->first();
		$orange = DB::table('colors')->select('id')->where('name', '=', 'Orange')->first();
		$yellow = DB::table('colors')->select('id')->where('name', '=', 'Yellow')->first();
		$green = DB::table('colors')->select('id')->where('name', '=', 'Green')->first();
		$blue = DB::table('colors')->select('id')->where('name', '=', 'Blue')->first();
		$purple = DB::table('colors')->select('id')->where('name', '=', 'Purple')->first();
		$white = DB::table('colors')->select('id')->where('name', '=', 'White')->first();
		$lightgrey = DB::table('colors')->select('id')->where('name', '=', 'Light Grey')->first();
		$grey = DB::table('colors')->select('id')->where('name', '=', 'Grey')->first();
		$darkgrey = DB::table('colors')->select('id')->where('name', '=', 'Dark Grey')->first();
		$black = DB::table('colors')->select('id')->where('name', '=', 'Black')->first();

		$rainbow = DB::table('palettes')->select('id')->where('name', '=', 'Rainbow')->first();
		$halloween = DB::table('palettes')->select('id')->where('name', '=', 'Halloween')->first();
		$july = DB::table('palettes')->select('id')->where('name', '=', '4th of July')->first();
		$greyscale = DB::table('palettes')->select('id')->where('name', '=', 'Greyscale')->first();

		DB::table('color_palette')->insert([
			'color_id' => $red->id,
			'palette_id' => $rainbow->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color_palette')->insert([
			'color_id' => $orange->id,
			'palette_id' => $rainbow->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color_palette')->insert([
			'color_id' => $yellow->id,
			'palette_id' => $rainbow->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color_palette')->insert([
			'color_id' => $green->id,
			'palette_id' => $rainbow->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color_palette')->insert([
			'color_id' => $blue->id,
			'palette_id' => $rainbow->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color_palette')->insert([
			'color_id' => $purple->id,
			'palette_id' => $rainbow->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color_palette')->insert([
			'color_id' => $orange->id,
			'palette_id' => $halloween->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color_palette')->insert([
			'color_id' => $black->id,
			'palette_id' => $halloween->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color_palette')->insert([
			'color_id' => $red->id,
			'palette_id' => $july->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color_palette')->insert([
			'color_id' => $white->id,
			'palette_id' => $july->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color_palette')->insert([
			'color_id' => $blue->id,
			'palette_id' => $july->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color_palette')->insert([
			'color_id' => $white->id,
			'palette_id' => $greyscale->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color_palette')->insert([
			'color_id' => $lightgrey->id,
			'palette_id' => $greyscale->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color_palette')->insert([
			'color_id' => $grey->id,
			'palette_id' => $greyscale->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color_palette')->insert([
			'color_id' => $darkgrey->id,
			'palette_id' => $greyscale->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color_palette')->insert([
			'color_id' => $black->id,
			'palette_id' => $greyscale->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
