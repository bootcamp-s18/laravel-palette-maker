<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
		DB::table('color')->insert([
            'name' => 'Red',
            'hex' => 'ee2560',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color')->insert([
            'name' => 'Orange',
            'hex' => 'e97f02',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color')->insert([
            'name' => 'Yellow',
            'hex' => 'f8ca00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color')->insert([
            'name' => 'Green',
            'hex' => '3ac569',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color')->insert([
            'name' => 'Blue',
            'hex' => '47b8e0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color')->insert([
            'name' => 'Purple',
            'hex' => '7200da',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color')->insert([
            'name' => 'White',
            'hex' => 'FFFFFF',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color')->insert([
            'name' => 'Light Grey',
            'hex' => 'CCCCCC',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color')->insert([
            'name' => 'Grey',
            'hex' => '666666',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color')->insert([
            'name' => 'Dark Grey',
            'hex' => '333333',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

		DB::table('color')->insert([
            'name' => 'Black',
            'hex' => '000000',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
