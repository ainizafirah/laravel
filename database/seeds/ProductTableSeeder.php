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
        'imagePath' => 'https://5.imimg.com/data5/AV/TV/GLADMIN-59147508/fresh-pineapple-250x250.jpg',
        'title' => 'Pineapple',
        'description' => 'nenas sangat sedap, enak dan lazak.',
        'price' => 5
        ]);

        $product->save();

        $product =new \App\Product([
        'imagePath' => 'https://cdns.klimg.com/newshub.id/news/2016/06/24/67815/663x442-3-manfaat-buah-mangga-untuk-berbuka-puasa-1606248.jpg',
        'title' => 'Manggo',
        'description' => 'mangga sangat sedap, enak dan lazak.',
        'price' => 3
        ]);

        $product->save();

        $product =new \App\Product([
        'imagePath' => 'https://4awcmd1th3m1scfs83pxlvbh-wpengine.netdna-ssl.com/wp-content/uploads/2017/10/seedless-watermelon.jpg',
        'title' => 'Watermelon',
        'description' => 'tembikai sangat sedap, enak dan lazak.',
        'price' => 7
        ]);

        $product->save();

        $product =new \App\Product([
        'imagePath' => 'https://media.mercola.com/assets/images/foodfacts/papaya-nutrition-facts.jpg',
        'title' => 'Papaya',
        'description' => 'betik sangat sedap, enak dan lazak.',
        'price' => 6
        ]);

        $product->save();

        $product =new \App\Product([
        'imagePath' => 'https://www.supplybunny.com/uploads/product/main_image/6205/small_0d4cfc8a-b684-4591-8633-e38071ca2cbc.jpg',
        'title' => 'Jambu Air',
        'description' => 'jambu air sangat sedap, enak dan lazak.',
        'price' => 3
        ]);

        $product->save();

    }
}
