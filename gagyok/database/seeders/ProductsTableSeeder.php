<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'product_name' => 'CLIO',
                'product_image' => 'clio.png',
                'product_price' => 195200.0,
                'product_stock' => 67,
                'product_short_desc' => 'Prism Air Shadow Sparkling',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis ',
                'product_category' => 'Make-Up',
                'product_discount' => NULL,
            ),
            1 => 
            array (
                'product_name' => 'HOLIKA HOLIKA',
                'product_image' => 'holika.png',
                'product_price' => 107000.0,
                'product_stock' => 44,
                'product_short_desc' => 'Holi Pop Watercolor Cheek',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis ',
                'product_category' => 'Make-Up',
                'product_discount' => NULL,
            ),
            2 => 
            array (
                'product_name' => ' 3CE',
                'product_image' => '3ce.png',
                'product_price' => 158000.0,
                'product_stock' => 43,
                'product_short_desc' => 'Eye Shadow Palette',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis ',
                'product_category' => 'Make-Up',
                'product_discount' => NULL,
            ),
            3 => 
            array (
                'product_name' => 'THE SAEM',
                'product_image' => 'saem.png',
                'product_price' => 99000.0,
                'product_stock' => 76,
                'product_short_desc' => 'Saemmul Real Gel Tint',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis pretium quis consequat ex. Proin sed enim in purus ultrices semper. Ut elementum efficitur tortor eget semper. Nullam sem sapien,',
                'product_category' => 'Make-Up',
                'product_discount' => NULL,
            ),
            4 => 
            array (
                'product_name' => 'INNISFREE',
                'product_image' => 'innisfree.png',
                'product_price' => 185000.0,
                'product_stock' => 23,
                'product_short_desc' => 'Vivid Cotton Stick 2 g',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis pretium quis consequat ex. Proin sed enim in purus ultrices semper. Ut elementum efficitur tortor eget semper. Nullam sem sapien,',
                'product_category' => 'Make-Up',
                'product_discount' => NULL,
            ),
            5 => 
            array (
                'product_name' => 'MISSHA',
                'product_image' => 'missha.png',
                'product_price' => 282000.0,
                'product_stock' => 33,
                'product_short_desc' => 'Magic Cushion Moist Up Special Set Refill+Puff',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis pretium quis consequat ex. Proin sed enim in purus ultrices semper. Ut elementum efficitur tortor eget semper. Nullam sem sapien,',
                'product_category' => 'Make-Up',
                'product_discount' => NULL,
            ),
            6 => 
            array (
                'product_name' => 'COSRX',
                'product_image' => 'cosrx.png',
                'product_price' => 150000.0,
                'product_stock' => 223,
                'product_short_desc' => 'AHA/BHA Clarifying Treatment Toner',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis pretium quis consequat ex. Proin sed enim in purus ultrices semper. Ut elementum efficitur tortor eget semper. Nullam sem sapien,',
                'product_category' => 'Skincare',
                'product_discount' => NULL,
            ),
            7 => 
            array (
                'product_name' => 'PYUNKANG YUL',
                'product_image' => 'pyunkang.png',
                'product_price' => 450000.0,
                'product_stock' => 122,
                'product_short_desc' => 'Starter Kit Edition',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis pretium quis consequat ex. Proin sed enim in purus ultrices semper. Ut elementum efficitur tortor eget semper. Nullam sem sapien,',
                'product_category' => 'Skincare',
                'product_discount' => NULL,
            ),
            8 => 
            array (
                'product_name' => 'BENTON',
                'product_image' => 'benton.png',
                'product_price' => 162000.0,
                'product_stock' => 78,
                'product_short_desc' => 'Aloe Propolis Soothing Gel',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis pretium quis consequat ex. Proin sed enim in purus ultrices semper. Ut elementum efficitur tortor eget semper. Nullam sem sapien,',
                'product_category' => 'Skincare',
                'product_discount' => NULL,
            ),
            9 => 
            array (
                'product_name' => 'THE SAEM',
                'product_image' => 'thesaem.png',
                'product_price' => 129000.0,
                'product_stock' => 343,
                'product_short_desc' => 'Jeju Fresh Aloe Cleansing Foam',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis pretium quis consequat ex. Proin sed enim in purus ultrices semper. Ut elementum efficitur tortor eget semper. Nullam sem sapien,',
                'product_category' => 'Skincare',
                'product_discount' => NULL,
            ),
            10 => 
            array (
                'product_name' => 'INNISFREE',
                'product_image' => 'innis.png',
                'product_price' => 500000.0,
                'product_stock' => 23,
                'product_short_desc' => 'Brightening Pore Serum',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis pretium quis consequat ex. Proin sed enim in purus ultrices semper. Ut elementum efficitur tortor eget semper. Nullam sem sapien,',
                'product_category' => 'Skincare',
                'product_discount' => NULL,
            ),
            11 => 
            array (
                'product_name' => 'NACIFIC',
                'product_image' => 'nacific.png',
                'product_price' => 232000.0,
                'product_stock' => 232,
                'product_short_desc' => 'Fresh Herb Origin Serum',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis pretium quis consequat ex. Proin sed enim in purus ultrices semper. Ut elementum efficitur tortor eget semper. Nullam sem sapien,a',
                'product_category' => 'Skincare',
                'product_discount' => NULL,
            ),
            12 => 
            array (
                'product_name' => 'NANDA MADE',
                'product_image' => 'nanda1.png',
                'product_price' => 550000.0,
                'product_stock' => 231,
                'product_short_desc' => 'Tie-Waist Tartan Check Pants',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis pretium quis consequat ex. Proin sed enim in purus ultrices semper. Ut elementum efficitur tortor eget semper. Nullam sem sapien,a',
                'product_category' => 'Mode',
                'product_discount' => NULL,
            ),
            13 => 
            array (
                'product_name' => 'NANDA MADE',
                'product_image' => 'nanda2.png',
                'product_price' => 300000.0,
                'product_stock' => 21,
                'product_short_desc' => 'Asymmetrical Long Knit Dress',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis pretium quis consequat ex. Proin sed enim in purus ultrices semper. Ut elementum efficitur tortor eget semper. Nullam sem sapien,a',
                'product_category' => 'Mode',
                'product_discount' => NULL,
            ),
            14 => 
            array (
                'product_name' => 'NANDA MADE',
                'product_image' => 'nanda3.png',
                'product_price' => 425000.0,
                'product_stock' => 565,
                'product_short_desc' => '4-Pocket Mini Drawstring Shorts',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis pretium quis consequat ex. Proin sed enim in purus ultrices semper. Ut elementum efficitur tortor eget semper. Nullam sem sapien,a',
                'product_category' => 'Mode',
                'product_discount' => NULL,
            ),
            15 => 
            array (
                'product_name' => 'STYLENANDA',
                'product_image' => 'stylenanda1.png',
                'product_price' => 329000.0,
                'product_stock' => 546,
                'product_short_desc' => 'Waffle Texture Crew Neck Sweatshirt',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis pretium quis consequat ex. Proin sed enim in purus ultrices semper. Ut elementum efficitur tortor eget semper. Nullam sem sapien,a',
                'product_category' => 'Mode',
                'product_discount' => NULL,
            ),
            16 => 
            array (
                'product_name' => 'STYLENANDA',
                'product_image' => 'stylenanda2.png',
                'product_price' => 200000.0,
                'product_stock' => 33,
                'product_short_desc' => 'Teddy Bear Printed T-Shirt',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis pretium quis consequat ex. Proin sed enim in purus ultrices semper. Ut elementum efficitur tortor eget semper. Nullam sem sapien,a',
                'product_category' => 'Mode',
                'product_discount' => NULL,
            ),
            17 => 
            array (
                'product_name' => 'STYLENANDA',
                'product_image' => 'stylenanda4.png',
                'product_price' => 332000.0,
                'product_stock' => 545,
                'product_short_desc' => 'Cutaway Collar Ribbed Cardigan',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis pretium quis consequat ex. Proin sed enim in purus ultrices semper. Ut elementum efficitur tortor eget semper. Nullam sem sapien,a',
                'product_category' => 'Mode',
                'product_discount' => NULL,
            ),
            18 => 
            array (
                'product_name' => 'UMEDA',
                'product_image' => 'UMEDA.png',
                'product_price' => 200000.0,
                'product_stock' => 77,
                'product_short_desc' => 'Minito USB charging Mini Lightweight Vacuum Cleaner',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis ',
                'product_category' => 'Elektronik',
                'product_discount' => NULL,
            ),
            19 => 
            array (
                'product_name' => 'KITCHEN TOOL',
                'product_image' => 'KITCHENTOOL.png',
                'product_price' => 199000.0,
                'product_stock' => 50,
                'product_short_desc' => 'Measuring Spoon Weight Scale Kitchen Baking Cooking Tool',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis ',
                'product_category' => 'Elektronik',
                'product_discount' => NULL,
            ),
            20 => 
            array (
                'product_name' => 'KOREA ZERO 9 FAN',
                'product_image' => 'KOREAZERO9FAN.png',
                'product_price' => 1964000.0,
                'product_stock' => 100,
                'product_short_desc' => 'Electric USB Rechargeable Mini Fan Safe
',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis ',
                'product_category' => 'Elektronik',
                'product_discount' => NULL,
            ),
            21 => 
            array (
                'product_name' => 'HAPPYCALL',
                'product_image' => 'HAPPYCALL.png',
                'product_price' => 3029000.0,
                'product_stock' => 772,
                'product_short_desc' => 'Electric Induction Kitchen Appliances',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis ',
                'product_category' => 'Elektronik',
                'product_discount' => NULL,
            ),
            22 => 
            array (
                'product_name' => 'HYUNDAI',
                'product_image' => 'HYUNDAI.png',
                'product_price' => 740000.0,
                'product_stock' => 54,
                'product_short_desc' => 'Modern Handheld Hang Ironing Machine Steam',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis ',
                'product_category' => 'Elektronik',
                'product_discount' => NULL,
            ),
            23 => 
            array (
                'product_name' => 'XIAO MI',
                'product_image' => 'XIAOMI.png',
                'product_price' => 393000.0,
                'product_stock' => 33,
                'product_short_desc' => 'Liven Electric Barbecue Grill and Hot Pot 2 In 1',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis ',
                'product_category' => 'Elektronik',
                'product_discount' => NULL,
            ),
            24 => 
            array (
                'product_name' => 'PULMUONE',
                'product_image' => 'PULMUONE.png',
                'product_price' => 30000.0,
                'product_stock' => 200,
                'product_short_desc' => 'Mie Instan Saus Kacang Hitam Korea',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis ',
                'product_category' => 'Makanan',
                'product_discount' => NULL,
            ),
            25 => 
            array (
                'product_name' => 'OTTOGI CHEESE RAMEN',
                'product_image' => 'OTTOGICHEESERAMEN.png',
                'product_price' => 29000.0,
                'product_stock' => 322,
                'product_short_desc' => ' Mie Ramyun rasa Keju ala Korea',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non neque non nisi iaculis ',
                'product_category' => 'Makanan',
                'product_discount' => NULL,
            ),
            26 => 
            array (
                'product_name' => 'NONGSHIM',
                'product_image' => 'NONGSHIM.png',
                'product_price' => 12000.0,
                'product_stock' => 322,
                'product_short_desc' => 'Shin Ramyun Spicy Mushroom',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ullamcorper dolor nec urna dignissim, vel pellentesque augue dignissim. Vestibulum varius velit sit amet fermentum dapibus. Nunc dignissim ullamcorper justo id feugiat. Curabitur ',
                'product_category' => 'Makanan',
                'product_discount' => NULL,
            ),
            27 => 
            array (
                'product_name' => 'WOONGJIN',
                'product_image' => 'WOONGJIN.png',
                'product_price' => 58000.0,
                'product_stock' => 221,
                'product_short_desc' => 'Peach Yogurt Zaiyeonun Drink 1.5 L',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ullamcorper dolor nec urna dignissim, vel pellentesque augue dignissim. Vestibulum varius velit sit amet fermentum dapibus. Nunc dignissim ullamcorper justo id feugiat. Curabitur ',
                'product_category' => 'Makanan',
                'product_discount' => NULL,
            ),
            28 => 
            array (
                'product_name' => 'BINGGRAE',
                'product_image' => 'BINGGRAE.png',
                'product_price' => 29000.0,
                'product_stock' => 423,
                'product_short_desc' => 'Banana 200 ML Susu Korea Rasa Pisang',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ullamcorper dolor nec urna dignissim, vel pellentesque augue dignissim. Vestibulum varius velit sit amet fermentum dapibus. Nunc dignissim ullamcorper justo id feugiat. Curabitur ',
                'product_category' => 'Makanan',
                'product_discount' => NULL,
            ),
            29 => 
            array (
                'product_name' => 'WOONGJIN',
                'product_image' => 'WOONGJIN2.png',
                'product_price' => 15000.0,
                'product_stock' => 423,
                'product_short_desc' => 'Morning Rice Can - Minuman Beras Korea',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ullamcorper dolor nec urna dignissim, vel pellentesque augue dignissim. Vestibulum varius velit sit amet fermentum dapibus. Nunc dignissim ullamcorper justo id feugiat. Curabitur ',
                'product_category' => 'Makanan',
                'product_discount' => NULL,
            ),
            30 => 
            array (
                'product_name' => 'OFFICIAL MERCH',
                'product_image' => 'OFFICIALMERCH1.png',
                'product_price' => 902000.0,
                'product_stock' => 233,
                'product_short_desc' => 'LOONA 2021 SEASON\'S GREETINGS',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ullamcorper dolor nec urna dignissim, vel pellentesque augue dignissim. Vestibulum varius velit sit amet fermentum dapibus. Nunc dignissim ullamcorper justo id feugiat. Curabitur ',
                'product_category' => 'Koleksi-Penggemar',
                'product_discount' => NULL,
            ),
            31 => 
            array (
                'product_name' => 'OFFICIAL MERCH',
                'product_image' => 'OFFICIALMERCH2.png',
                'product_price' => 400000.0,
                'product_stock' => 322,
            'product_short_desc' => 'BTS MINI Dolls (Jungkook and V) bundle',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rhoncus ultrices metus, at ornare neque pretium at. Donec tempus, sapien ac vulputate rhoncus',
                'product_category' => 'Koleksi-Penggemar',
                'product_discount' => NULL,
            ),
            32 => 
            array (
                'product_name' => 'MERCH',
                'product_image' => 'MERCH.png',
                'product_price' => 3000.0,
                'product_stock' => 221,
                'product_short_desc' => 'NCT DREAM - photocard [RELOAD] 7 Days - renjun',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rhoncus ultrices metus, at ornare neque pretium at. Donec tempus, sapien ac vulputate rhoncus',
                'product_category' => 'Koleksi-Penggemar',
                'product_discount' => NULL,
            ),
            33 => 
            array (
                'product_name' => 'OFFICIAL MERCH',
                'product_image' => 'OFFICIALMERCH3.png',
                'product_price' => 437000.0,
                'product_stock' => 232,
                'product_short_desc' => 'Lampu Stick Kpop Exo Mot Versi Three Tour Bomb
',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rhoncus ultrices metus, at ornare neque pretium at. Donec tempus, sapien ac vulputate rhoncus',
                'product_category' => 'Koleksi-Penggemar',
                'product_discount' => NULL,
            ),
            34 => 
            array (
                'product_name' => 'OFFICIAL ALBUM',
                'product_image' => 'OFFICIALALBUM.png',
                'product_price' => 1700000.0,
                'product_stock' => 245,
                'product_short_desc' => 'BTS - PERSONA',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rhoncus ultrices metus, at ornare neque pretium at. Donec tempus, sapien ac vulputate rhoncus',
                'product_category' => 'Koleksi-Penggemar',
                'product_discount' => NULL,
            ),
            35 => 
            array (
                'product_name' => 'OFFICIAL MERCH',
                'product_image' => 'OFFICIALMERCH4.png',
                'product_price' => 343000.0,
                'product_stock' => 546,
                'product_short_desc' => 'Lightstick LED Portable Desain KpoP NCT',
                'product_long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rhoncus ultrices metus, at ornare neque pretium at. Donec tempus, sapien ac vulputate rhoncus',
                'product_category' => 'Koleksi-Penggemar',
                'product_discount' => NULL,
            ),
        ));
        
        
    }
}