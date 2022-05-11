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
        //
        DB::table('products')->insert([
            [
            'name'=>'Oppo-Mobile',
            "price"=>"300$",
            "description"=>"A smart phone with 8gb ram and more features",
            "category"=>"mobile",
            "gallery"=>"https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/reno6-pro-5g-oversea/navigation/Homepage-header2-Grey-427-x-600.png"
            ],
            [
                'name'=>'Sony-Tv',
                "price"=>"550$",
                "description"=>"A smart Tv with more features",
                "category"=>"tv",
                "gallery"=>"https://www.sony-asia.com/image/916e1ca5c3b64c3947acae853da7ad07?fmt=pjpeg&wid=660&hei=660&bgcolor=F1F5F9&bgc=F1F5F9"
                ],
                [
                    'name'=>'LG-Tv',
                    "price"=>"450$",
                    "description"=>"A smart Tv with more features",
                    "category"=>"tv",
                    "gallery"=>"https://www.lg.com/in/images/tvs/md07505286/gallery/43UN7300PTC-D-01-V1.jpg"
                    ],
                    [
                        'name'=>'LG-Fridge',
                        "price"=>"800$",
                        "description"=>"A fridge with more features",
                        "category"=>"fridge",
                        "gallery"=>"https://www.lg.com/au/images/fridges/md07506673/gallery/GF-V910MBL-1.jpg"
                        ],
                        

            
        ]);
    }
}
