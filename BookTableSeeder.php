<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use App\Models\Film;



class BoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Book::factory()->times(100)->create();
        DB::table('books')->insert([
        	'title'=>'Harry Potter'
        	'genre'=>'fantastic',
        	'author'=>'Joan',
        	'rating'=>'8.0',
        ]);
    }
}
