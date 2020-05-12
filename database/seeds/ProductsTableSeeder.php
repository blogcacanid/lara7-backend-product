<?php

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
        DB::table('products')->insert([
            [
                'product_name'  => 'SO KLIN Bio-matic Front Load 2kg Box',
                'product_price' => 59500,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'SO KLIN Softergent 1.8kg Bag',
                'product_price' => 36500,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'SO KLIN Softerner 800g Bag',
                'product_price' => 17000,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'SO KLIN Bi0-matic Liquid 800ml pch',
                'product_price' => 23500,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'SO KLIN Liquid 800ml pch',
                'product_price' => 17700,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
        ]);
    }
}