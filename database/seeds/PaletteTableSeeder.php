<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PalettesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
   		DB::table('palettes')->insert([
            'name' => 'Rainbow',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

   		DB::table('palettes')->insert([
            'name' => '4th of July',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

   		DB::table('palettes')->insert([
            'name' => 'Halloween',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

   		DB::table('palettes')->insert([
            'name' => 'Greyscale',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


    }
}
