<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Baby T-Shirts' => [
                'Cotton Cartoon Tee',
                'Tiny Tiger Printed T-Shirt',
                'Little Panda Half-Sleeve Tee',
            ],
            'Shorts & Bloomers' => [
                'Soft Cotton Bloomers',
                'Elastic Baby Shorts',
                'Printed Diaper Cover Shorts',
            ],
            'Night Suits' => [
                'Full Sleeve Night Suit Set',
                'Moon & Stars Pajama Set',
                'Cotton Sleepwear with Mittens',
            ],
            'Feeding Bibs' => [
                'Waterproof Feeding Bib',
                'Cute Animal Print Bib',
                'Velcro Soft Cotton Bib',
            ],
            'Swaddle Wraps' => [
                'Organic Cotton Swaddle',
                'Flannel Swaddle Blanket',
                'WrapMe Cozy Muslin Wrap',
            ],
            'Onesies' => [
                'Buttoned Up Bodysuit',
                'Sleeveless Cotton Onesie',
                'Full Cover Romper Onesie',
            ],
            'Socks & Mittens' => [
                'Newborn Woolen Mittens',
                'Anti-Slip Baby Socks',
                'Cute Animal Toe Socks',
            ],
            'Warm Wear' => [
                'Knitted Wool Sweater',
                'Fleece Baby Jacket',
                'Hooded Winter Romper',
            ]
        ];

        foreach ($categories as $catName => $products) {
            $category = Category::create(['name' => $catName]);

            foreach ($products as $productName) {
                Product::create([
                    'category_id' => $category->id,
                    'name' => $productName,
                    'description' => 'Soft, breathable, and safe for babies. Made with love at StyleHub.',
                    'price' => rand(299, 999),
                    'quantity' => rand(5, 20),
                    'image' => null, // Set sample image path if needed
                ]);
            }
        }
    }
}
