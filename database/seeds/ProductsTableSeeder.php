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
            [
                'product_name'  => 'ROYALE Pelembut Pakaian 800ml pch',
                'product_price' => 25500,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'SO KLIN RAPIKA Pelicin Pakaian 400ml',
                'product_price' => 6000,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'MAMA LEMON 800ml pch',
                'product_price' => 11900,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'MORIN Jam Strawberry 170g btl',
                'product_price' => 19000,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'MORIN Jam Hazelnut with Cocoa 150g bt',
                'product_price' => 22500,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'MORIN Jam Choco Peanut 150g btl',
                'product_price' => 17700,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'NUSANTARA Madu Murni 250ml btl',
                'product_price' => 58500,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'NUSANTARA Madu Murni Royal Jelly Bee Pollen 250ml btl',
                'product_price' => 68500,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'PIKOPI Kopi Instant 3 in 1 10x20g pck',
                'product_price' => 8800,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'LUWAK White Koffie Tarik Malaka 6x30g pck',
                'product_price' => 12900,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'TOP Coffee 2 in 1 Kopi+Gula 10s pck',
                'product_price' => 8200,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'ARLA PUREGROW Susu Bubuk Organik 360g box',
                'product_price' => 138500,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'NUTELLA Jam Spread Kecil Hazelnut 200g btl',
                'product_price' => 10000,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'ICHITAN Thai Milk Tea/Coffe/Green Tea 310ml btl',
                'product_price' => 8500,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'AQUA Air Mineral 24x600ml kemasan karton',
                'product_price' => 20000,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'PIATOS Snack Kentang Sapi Panggang 35g pcs',
                'product_price' => 6000,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'MORISCA Lapis Legit Singkong Srikaya 365g pcs',
                'product_price' => 26900,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'INACO Mini Jelly 15s pack',
                'product_price' => 7500,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'MAMASUKA Bon Nori Original/Spicy 30g btl',
                'product_price' => 15000,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'ROSE Tepung Beras 500g pcs',
                'product_price' => 9500,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'FRESTEA 500ml btl semua varian',
                'product_price' => 6000,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'BANGO Kecap Manis Refill 575/550ml pch',
                'product_price' => 23500,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'ABC Sardines 425g klg semua varian',
                'product_price' => 20800,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'KRAFT Keju Quick Melt 165g box',
                'product_price' => 27300,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'CADBURY Dairy Milk Chocolate 62g pck',
                'product_price' => 14900,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'REGAL Biscuit Marie 230g pck',
                'product_price' => 18400,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'QTELA Keripik Singkong 60g pck',
                'product_price' => 5800,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'PEPSODENT Pasta Gigi White 225g tub',
                'product_price' => 13400,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'HEAD & SHOULDERS Shampoo 160/165ml btl',
                'product_price' => 26500,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'CAP LANG Minyak Kayu Putih 120ml btl',
                'product_price' => 51500,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'MERRY Pants Good Skin S26/M22/L20 bag',
                'product_price' => 50500,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'YOFARIA Activ8 170ml btl',
                'product_price' => 6900,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'PRIMA RASA Fruit Cocktail 220 cup',
                'product_price' => 7500,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'AUTAN Lotion Anti Nyamuk SS Floral & Protect 50ml tub',
                'product_price' => 9900,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
            [
                'product_name'  => 'GLADE Automatic Spray Refill Ocean Escape 145ml klg',
                'product_price' => 32500,
                'created_at'    => NOW(),
                'updated_at'    => NOW(),
            ],
        ]);
    }
}