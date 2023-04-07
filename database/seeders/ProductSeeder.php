<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(
            [
                'name' =>'Luxurious Wtach',
                'slug' =>'Luxurious Wtach',
                'description' =>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'image_name' =>'watch-1.png',
                'price' =>250.00,
                'sale_price' => 120.00,
            ]
            );
            Product::create(
                [
                    'name' =>'Luxurious Wtach',
                    'slug' =>'Luxurious Wtach',
                    'description' =>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                    'image_name' =>'watch-2.png',
                    'price' =>230.00,
                    'sale_price' => 90.00,
                ]
                );
                Product::create(
                    [
                        'name' =>'Luxurious Wtach',
                        'slug' =>'Luxurious Wtach',
                        'description' =>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                        'image_name' =>'watch-3.png',
                        'price' =>220.00,
                        'sale_price' => 110.00,
                    ]
                    );
                    Product::create(
                        [
                            'name' =>'Luxurious Wtach',
                            'slug' =>'Luxurious Wtach',
                            'description' =>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                            'image_name' =>'watch-4.png',
                            'price' =>210.00,
                            'sale_price' => 100.00,
                        ]
                        );
    }
}
