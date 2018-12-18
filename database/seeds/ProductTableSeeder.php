<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product =new \App\Product([
        'imagePath' => 'https://i5.walmartimages.ca/images/Large/580/6_r/875806_R.jpg',
        'title' => 'Banana',
        'description' => 'pisang sangat sedap, enak dan lazak.',
        'price' => 1
        ]);

        $product->save();

        $product =new \App\Product([
        'imagePath' => 'https://i5.walmartimages.ca/images/Large/580/6_r/875806_R.jpg',
        'title' => 'Banana',
        'description' => 'pisang sangat sedap, enak dan lazak.',
        'price' => 1
        ]);

        $product->save();

        $product =new \App\Product([
        'imagePath' => 'https://i5.walmartimages.ca/images/Large/580/6_r/875806_R.jpg',
        'title' => 'Banana',
        'description' => 'pisang sangat sedap, enak dan lazak.',
        'price' => 1
        ]);

        $product->save();

        $product =new \App\Product([
        'imagePath' => 'https://i5.walmartimages.ca/images/Large/580/6_r/875806_R.jpg',
        'title' => 'Banana',
        'description' => 'pisang sangat sedap, enak dan lazak.',
        'price' => 1
        ]);

        $product->save();

        $product =new \App\Product([
        'imagePath' => 'https://i5.walmartimages.ca/images/Large/580/6_r/875806_R.jpg',
        'title' => 'Banana',
        'description' => 'pisang sangat sedap, enak dan lazak.',
        'price' => 1
        ]);

        $product->save();

        $product =new \App\Product([
        'imagePath' => 'https://i5.walmartimages.ca/images/Large/580/6_r/875806_R.jpg',
        'title' => 'Banana',
        'description' => 'pisang sangat sedap, enak dan lazak.',
        'price' => 1
        ]);

        $product->save();

    }
}
