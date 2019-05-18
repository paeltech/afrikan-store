<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::Create([
            'name'=>'African bag',
            'slug'=>'kitenge-bag',
            'details'=>'African bag made from kitenge',
            'price'=>50,
            'description'=>'African bag made from kitenge and found only in africa not eslsewhere',
        ]);

        Product::Create([
            'name'=>'shoes',
            'slug'=>'best-shoes',
            'details'=>'African shoes made from kitenge',
            'price'=>56,
            'description'=>'African bag mjfdkjade from kitenge and found only in africa not eslsewhere',
        ]);

        Product::Create([
            'name'=>'shoes number 2',
            'slug'=>'best-shoes-3',
            'details'=>'African shoes number 2 made from kitenge',
            'price'=>56,
            'description'=>'African bjnfkdjnkseeag mjfdkjade from kitenge and found only in africa not eslsewhere',
        ]);

        Product::Create([
            'name'=>'Kirk band',
            'slug'=>'kirk band',
            'details'=>'Good and nice kirk band',
            'price'=>39,
            'description'=>'African bjnfkdjnkseeag mjfdkjade from kitenge and found only in africa not eslsewhere',
        ]);


    }
}
