<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
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

            'name'=>'MacBookPro',
            'price'=>'1479',
            'category'=>'PC',
            'description'=>'The Apple M1 chip gives the 13‑inch MacBook Pro speed and power beyond belief. With up to 2.8x CPU performance.',
            'gallery'=>'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/mbp-spacegray-select-202011?wid=904&hei=840&fmt=jpeg&qlt=80&op_usm=0.5,0.5&.v=1603406905000',
        ],
        [

            'name'=>'ThinkPad X1 Carbon Gen 8',
            'price'=>'1551',
            'category'=>'PC',
            'description'=>'With 10th Gen Intel® Core™ processing, the ThinkPad X1 Carbon Gen 8 is faster than ever no matter the task. ',
            'gallery'=>'https://www.lenovo.com/medias/lenovo-laptop-thinkpad-x1-carbon-gen8-subseries-hero.png?context=bWFzdGVyfHJvb3R8ODQ4NDd8aW1hZ2UvcG5nfGgyMi9oOGYvMTA2NzQ1ODc3Mjk5NTAucG5nfDQzODYxOTc5ODA0MWJhZTQyYThjOTAzZjE0NDI2NWVjYjY5MjE3MGFiMWEzODhlN2UyMGUwNGZhMWRmOTJmNzg',
        ],
        [

            'name'=>'HP Spectre x360',
            'price'=>'1479',
            'category'=>'PC',
            'description'=>"The world's most powerfull convertible with a 90% screen-to-body-ratio. Big power, incredible performance.",
            'gallery'=>'https://www8.hp.com/content/dam/sites/worldwide/personal-computers/consumer/laptops/2-in-1s/spectre-x360-14-convertible-laptop/m2-tab1-3-innovation-mobile@2x.png',
        ],
        [

            'name'=>'Razer Book',
            'price'=>'1199',
            'category'=>'PC',
            'description'=>'Enter the next evolution of ultra-mobility and extreme performance. Utilizing the latest 11th gen Intel® Core™.',
            'gallery'=>'https://www.tejar.pk/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/r/a/razer_blade_stealth_13_gaming_laptop_3_-_tejar_4.jpg',
        ]
    
        ]
    
    );
    }
}

