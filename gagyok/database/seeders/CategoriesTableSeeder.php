<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'category_name' => 'Make-Up',
            'category_desc' => 'Kumpulan Barang barang kecantikan (make up) asli dan terjamin di import langsung dari korea',
                'category_image' => 'Make-Up.png',
            ),
            1 => 
            array (
                'category_name' => 'Skincare',
            'category_desc' => 'Kumpulan Barang barang kecantikan (skincare) asli dan terjamin di import langsung dari korea',
                'category_image' => 'Skincare.png',
            ),
            2 => 
            array (
                'category_name' => 'Mode',
                'category_desc' => 'Kumpulan barang barang/pakaian bergaya korea, asli dan terjamin di import langsung dari korea',
                'category_image' => 'Mode.png',
            ),
            3 => 
            array (
                'category_name' => 'Elektronik',
                'category_desc' => 'Kumpulan barang barang-barang elektronik bergaya korea, asli dan terjamin di import langsung dari korea',
                'category_image' => 'Elektronik.png',
            ),
            4 => 
            array (
                'category_name' => 'Makanan',
                'category_desc' => 'Kumpulan makanan bergaya korea, asli dan terjamin di import langsung dari korea terjamin kehalalannya',
                'category_image' => 'Makanan.png',
            ),
            5 => 
            array (
                'category_name' => 'Koleksi-Penggemar',
                'category_desc' => 'Kumpulan barang barang koleksi fans asli dan terjamin di import langsung dari korea terjamin.',
                'category_image' => 'Koleksi-Penggemar.png',
            ),
        ));
        
        
    }
}