<?php

use App\Subcategory;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Subcategory::insert([
            ['name' =>'Clothing', 'slug' => 'clothing', 'created_at' => $now, 'updated_at' => $now],
            ['name' =>'Footware', 'slug' => 'footware', 'created_at' => $now, 'updated_at' => $now],
            ['name' =>'Accessories', 'slug' => 'accessories', 'created_at' => $now, 'updated_at' => $now],
            ['name' =>'Crafts', 'slug' => 'crafts', 'created_at' => $now, 'updated_at' => $now]
        ]);
    }
}
