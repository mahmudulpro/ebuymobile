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
        $product = new \App\Product([
            'title' => 'Samsung Galaxy On7',
            'description' => 'Samsung Galaxy On7',
            'price' => 400,
            'imagePath' => 'https://www.91-img.com/pictures/samsung-galaxy-j3-(2016)-mobile-phone-large-1.jpg'
        ]);
        $product->save();

        $product = new \App\Product([
            'title' => 'Samsung Galaxy J8',
            'description' => 'The Samsung Galaxy J8 is a budget smartphone with an Infinity Display.',
            'price' => 200,
            'imagePath' => 'https://i.gadgets360cdn.com/products/large/1532351323_635_samsung_galaxy_j8.jpg'
        ]);
        $product->save();
        $product = new \App\Product([
            'title' => 'Samsung Galaxy C7',
            'description' => 'The Samsung Galaxy.......',
            'price' => 100,
            'imagePath' => 'https://5.imimg.com/data5/BA/EI/MY-32262995/samsung-galaxy-c7-pro-mobile-500x500.jpg'
        ]);
        $product->save();
        $product = new \App\Product([
            'title' => 'Samsung Galaxy A Series',
            'description' => 'The Samsung Galaxy.........',
            'price' => 300,
            'imagePath' => 'https://images.samsung.com/is/image/samsung/in-galaxy-a7-a750-sm-a750fzbdins-backblue-thumb-144660225?$PF_PRD_PNG$'
        ]);
        $product->save();
        $product = new \App\Product([
            'title' => 'Samsung Galaxy S7',
            'description' => 'The Samsung Galaxy.......',
            'price' => 400,
            'imagePath' => 'https://www.91-img.com/pictures/89993-v1-samsung-galaxy-s7-edge-mobile-phone-large-1.jpg'
        ]);
        $product->save();
        $product = new \App\Product([
            'title' => 'iPhone 8',
            'description' => 'Apple iPhone 8',
            'price' => 500,
            'imagePath' => 'https://cdn.tmobile.com/content/dam/t-mobile/en-p/cell-phones/apple/apple-iphone-8/gold/apple-iphone8-gold-1-3x.jpg'
        ]);
        $product->save();
        $product = new \App\Product([
            'title' => 'Apple iPhone X',
            'description' => 'iPhone X features',
            'price' => 300,
            'imagePath' => 'https://ebadutech.com/wp-content/uploads/2018/09/1.jpg'
        ]);
        $product->save();
        $product = new \App\Product([
            'title' => 'Huawei P20 Lite',
            'description' => 'This product is currently not available in any online store',
            'price' => 900,
            'imagePath' => 'https://www.91-img.com/pictures/125569-v4-huawei-p20-lite-mobile-phone-large-1.jpg'
        ]);
        $product->save();
        $product = new \App\Product([
            'title' => 'Huawei Y7 Pro',
            'description' => 'Huawei Y7 Pro 2019 comes with a so-called dewdrop notch display.',
            'price' => 200,
            'imagePath' => 'https://www.mobiledokan.com/wp-content/uploads/2019/03/Huawei-Y7-Pro-2019-Black.jpg'
        ]);
        $product->save();
        $product = new \App\Product([
            'title' => 'Huawei Nova 3i',
            'description' => '* 6.3" FHD+ Fullview Display 2.0 * Kirin 710 Octa-core 2.2GHz* Android™ 8.1* 4GB RAM, 128GB ROM, MicroSD (up to 256GB)* Dual 16MP + 2MP Rear, 24MP + 2MP front camera* 3,340mAh* Dual SIM',
            'price' => 1100,
            'imagePath' => 'https://3ex.com.my/4552-large_default/huawei-nova-3i.jpg'
        ]);
        $product->save();
    }

}
