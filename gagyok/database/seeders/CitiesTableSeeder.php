<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'province_id' => 21,
                'name' => 'Aceh Barat',
                'type' => 'Kabupaten',
                'postal_code' => '23681',
            ),
            1 => 
            array (
                'id' => 2,
                'province_id' => 21,
                'name' => 'Aceh Barat Daya',
                'type' => 'Kabupaten',
                'postal_code' => '23764',
            ),
            2 => 
            array (
                'id' => 3,
                'province_id' => 21,
                'name' => 'Aceh Besar',
                'type' => 'Kabupaten',
                'postal_code' => '23951',
            ),
            3 => 
            array (
                'id' => 4,
                'province_id' => 21,
                'name' => 'Aceh Jaya',
                'type' => 'Kabupaten',
                'postal_code' => '23654',
            ),
            4 => 
            array (
                'id' => 5,
                'province_id' => 21,
                'name' => 'Aceh Selatan',
                'type' => 'Kabupaten',
                'postal_code' => '23719',
            ),
            5 => 
            array (
                'id' => 6,
                'province_id' => 21,
                'name' => 'Aceh Singkil',
                'type' => 'Kabupaten',
                'postal_code' => '24785',
            ),
            6 => 
            array (
                'id' => 7,
                'province_id' => 21,
                'name' => 'Aceh Tamiang',
                'type' => 'Kabupaten',
                'postal_code' => '24476',
            ),
            7 => 
            array (
                'id' => 8,
                'province_id' => 21,
                'name' => 'Aceh Tengah',
                'type' => 'Kabupaten',
                'postal_code' => '24511',
            ),
            8 => 
            array (
                'id' => 9,
                'province_id' => 21,
                'name' => 'Aceh Tenggara',
                'type' => 'Kabupaten',
                'postal_code' => '24611',
            ),
            9 => 
            array (
                'id' => 10,
                'province_id' => 21,
                'name' => 'Aceh Timur',
                'type' => 'Kabupaten',
                'postal_code' => '24454',
            ),
            10 => 
            array (
                'id' => 11,
                'province_id' => 21,
                'name' => 'Aceh Utara',
                'type' => 'Kabupaten',
                'postal_code' => '24382',
            ),
            11 => 
            array (
                'id' => 12,
                'province_id' => 32,
                'name' => 'Agam',
                'type' => 'Kabupaten',
                'postal_code' => '26411',
            ),
            12 => 
            array (
                'id' => 13,
                'province_id' => 23,
                'name' => 'Alor',
                'type' => 'Kabupaten',
                'postal_code' => '85811',
            ),
            13 => 
            array (
                'id' => 14,
                'province_id' => 19,
                'name' => 'Ambon',
                'type' => 'Kota',
                'postal_code' => '97222',
            ),
            14 => 
            array (
                'id' => 15,
                'province_id' => 34,
                'name' => 'Asahan',
                'type' => 'Kabupaten',
                'postal_code' => '21214',
            ),
            15 => 
            array (
                'id' => 16,
                'province_id' => 24,
                'name' => 'Asmat',
                'type' => 'Kabupaten',
                'postal_code' => '99777',
            ),
            16 => 
            array (
                'id' => 17,
                'province_id' => 1,
                'name' => 'Badung',
                'type' => 'Kabupaten',
                'postal_code' => '80351',
            ),
            17 => 
            array (
                'id' => 18,
                'province_id' => 13,
                'name' => 'Balangan',
                'type' => 'Kabupaten',
                'postal_code' => '71611',
            ),
            18 => 
            array (
                'id' => 19,
                'province_id' => 15,
                'name' => 'Balikpapan',
                'type' => 'Kota',
                'postal_code' => '76111',
            ),
            19 => 
            array (
                'id' => 20,
                'province_id' => 21,
                'name' => 'Banda Aceh',
                'type' => 'Kota',
                'postal_code' => '23238',
            ),
            20 => 
            array (
                'id' => 21,
                'province_id' => 18,
                'name' => 'Bandar Lampung',
                'type' => 'Kota',
                'postal_code' => '35139',
            ),
            21 => 
            array (
                'id' => 22,
                'province_id' => 9,
                'name' => 'Bandung',
                'type' => 'Kabupaten',
                'postal_code' => '40311',
            ),
            22 => 
            array (
                'id' => 23,
                'province_id' => 9,
                'name' => 'Bandung',
                'type' => 'Kota',
                'postal_code' => '40111',
            ),
            23 => 
            array (
                'id' => 24,
                'province_id' => 9,
                'name' => 'Bandung Barat',
                'type' => 'Kabupaten',
                'postal_code' => '40721',
            ),
            24 => 
            array (
                'id' => 25,
                'province_id' => 29,
                'name' => 'Banggai',
                'type' => 'Kabupaten',
                'postal_code' => '94711',
            ),
            25 => 
            array (
                'id' => 26,
                'province_id' => 29,
                'name' => 'Banggai Kepulauan',
                'type' => 'Kabupaten',
                'postal_code' => '94881',
            ),
            26 => 
            array (
                'id' => 27,
                'province_id' => 2,
                'name' => 'Bangka',
                'type' => 'Kabupaten',
                'postal_code' => '33212',
            ),
            27 => 
            array (
                'id' => 28,
                'province_id' => 2,
                'name' => 'Bangka Barat',
                'type' => 'Kabupaten',
                'postal_code' => '33315',
            ),
            28 => 
            array (
                'id' => 29,
                'province_id' => 2,
                'name' => 'Bangka Selatan',
                'type' => 'Kabupaten',
                'postal_code' => '33719',
            ),
            29 => 
            array (
                'id' => 30,
                'province_id' => 2,
                'name' => 'Bangka Tengah',
                'type' => 'Kabupaten',
                'postal_code' => '33613',
            ),
            30 => 
            array (
                'id' => 31,
                'province_id' => 11,
                'name' => 'Bangkalan',
                'type' => 'Kabupaten',
                'postal_code' => '69118',
            ),
            31 => 
            array (
                'id' => 32,
                'province_id' => 1,
                'name' => 'Bangli',
                'type' => 'Kabupaten',
                'postal_code' => '80619',
            ),
            32 => 
            array (
                'id' => 33,
                'province_id' => 13,
                'name' => 'Banjar',
                'type' => 'Kabupaten',
                'postal_code' => '70619',
            ),
            33 => 
            array (
                'id' => 34,
                'province_id' => 9,
                'name' => 'Banjar',
                'type' => 'Kota',
                'postal_code' => '46311',
            ),
            34 => 
            array (
                'id' => 35,
                'province_id' => 13,
                'name' => 'Banjarbaru',
                'type' => 'Kota',
                'postal_code' => '70712',
            ),
            35 => 
            array (
                'id' => 36,
                'province_id' => 13,
                'name' => 'Banjarmasin',
                'type' => 'Kota',
                'postal_code' => '70117',
            ),
            36 => 
            array (
                'id' => 37,
                'province_id' => 10,
                'name' => 'Banjarnegara',
                'type' => 'Kabupaten',
                'postal_code' => '53419',
            ),
            37 => 
            array (
                'id' => 38,
                'province_id' => 28,
                'name' => 'Bantaeng',
                'type' => 'Kabupaten',
                'postal_code' => '92411',
            ),
            38 => 
            array (
                'id' => 39,
                'province_id' => 5,
                'name' => 'Bantul',
                'type' => 'Kabupaten',
                'postal_code' => '55715',
            ),
            39 => 
            array (
                'id' => 40,
                'province_id' => 33,
                'name' => 'Banyuasin',
                'type' => 'Kabupaten',
                'postal_code' => '30911',
            ),
            40 => 
            array (
                'id' => 41,
                'province_id' => 10,
                'name' => 'Banyumas',
                'type' => 'Kabupaten',
                'postal_code' => '53114',
            ),
            41 => 
            array (
                'id' => 42,
                'province_id' => 11,
                'name' => 'Banyuwangi',
                'type' => 'Kabupaten',
                'postal_code' => '68416',
            ),
            42 => 
            array (
                'id' => 43,
                'province_id' => 13,
                'name' => 'Barito Kuala',
                'type' => 'Kabupaten',
                'postal_code' => '70511',
            ),
            43 => 
            array (
                'id' => 44,
                'province_id' => 14,
                'name' => 'Barito Selatan',
                'type' => 'Kabupaten',
                'postal_code' => '73711',
            ),
            44 => 
            array (
                'id' => 45,
                'province_id' => 14,
                'name' => 'Barito Timur',
                'type' => 'Kabupaten',
                'postal_code' => '73671',
            ),
            45 => 
            array (
                'id' => 46,
                'province_id' => 14,
                'name' => 'Barito Utara',
                'type' => 'Kabupaten',
                'postal_code' => '73881',
            ),
            46 => 
            array (
                'id' => 47,
                'province_id' => 28,
                'name' => 'Barru',
                'type' => 'Kabupaten',
                'postal_code' => '90719',
            ),
            47 => 
            array (
                'id' => 48,
                'province_id' => 17,
                'name' => 'Batam',
                'type' => 'Kota',
                'postal_code' => '29413',
            ),
            48 => 
            array (
                'id' => 49,
                'province_id' => 10,
                'name' => 'Batang',
                'type' => 'Kabupaten',
                'postal_code' => '51211',
            ),
            49 => 
            array (
                'id' => 50,
                'province_id' => 8,
                'name' => 'Batang Hari',
                'type' => 'Kabupaten',
                'postal_code' => '36613',
            ),
            50 => 
            array (
                'id' => 51,
                'province_id' => 11,
                'name' => 'Batu',
                'type' => 'Kota',
                'postal_code' => '65311',
            ),
            51 => 
            array (
                'id' => 52,
                'province_id' => 34,
                'name' => 'Batu Bara',
                'type' => 'Kabupaten',
                'postal_code' => '21655',
            ),
            52 => 
            array (
                'id' => 53,
                'province_id' => 30,
                'name' => 'Bau-Bau',
                'type' => 'Kota',
                'postal_code' => '93719',
            ),
            53 => 
            array (
                'id' => 54,
                'province_id' => 9,
                'name' => 'Bekasi',
                'type' => 'Kabupaten',
                'postal_code' => '17837',
            ),
            54 => 
            array (
                'id' => 55,
                'province_id' => 9,
                'name' => 'Bekasi',
                'type' => 'Kota',
                'postal_code' => '17121',
            ),
            55 => 
            array (
                'id' => 56,
                'province_id' => 2,
                'name' => 'Belitung',
                'type' => 'Kabupaten',
                'postal_code' => '33419',
            ),
            56 => 
            array (
                'id' => 57,
                'province_id' => 2,
                'name' => 'Belitung Timur',
                'type' => 'Kabupaten',
                'postal_code' => '33519',
            ),
            57 => 
            array (
                'id' => 58,
                'province_id' => 23,
                'name' => 'Belu',
                'type' => 'Kabupaten',
                'postal_code' => '85711',
            ),
            58 => 
            array (
                'id' => 59,
                'province_id' => 21,
                'name' => 'Bener Meriah',
                'type' => 'Kabupaten',
                'postal_code' => '24581',
            ),
            59 => 
            array (
                'id' => 60,
                'province_id' => 26,
                'name' => 'Bengkalis',
                'type' => 'Kabupaten',
                'postal_code' => '28719',
            ),
            60 => 
            array (
                'id' => 61,
                'province_id' => 12,
                'name' => 'Bengkayang',
                'type' => 'Kabupaten',
                'postal_code' => '79213',
            ),
            61 => 
            array (
                'id' => 62,
                'province_id' => 4,
                'name' => 'Bengkulu',
                'type' => 'Kota',
                'postal_code' => '38229',
            ),
            62 => 
            array (
                'id' => 63,
                'province_id' => 4,
                'name' => 'Bengkulu Selatan',
                'type' => 'Kabupaten',
                'postal_code' => '38519',
            ),
            63 => 
            array (
                'id' => 64,
                'province_id' => 4,
                'name' => 'Bengkulu Tengah',
                'type' => 'Kabupaten',
                'postal_code' => '38319',
            ),
            64 => 
            array (
                'id' => 65,
                'province_id' => 4,
                'name' => 'Bengkulu Utara',
                'type' => 'Kabupaten',
                'postal_code' => '38619',
            ),
            65 => 
            array (
                'id' => 66,
                'province_id' => 15,
                'name' => 'Berau',
                'type' => 'Kabupaten',
                'postal_code' => '77311',
            ),
            66 => 
            array (
                'id' => 67,
                'province_id' => 24,
                'name' => 'Biak Numfor',
                'type' => 'Kabupaten',
                'postal_code' => '98119',
            ),
            67 => 
            array (
                'id' => 68,
                'province_id' => 22,
                'name' => 'Bima',
                'type' => 'Kabupaten',
                'postal_code' => '84171',
            ),
            68 => 
            array (
                'id' => 69,
                'province_id' => 22,
                'name' => 'Bima',
                'type' => 'Kota',
                'postal_code' => '84139',
            ),
            69 => 
            array (
                'id' => 70,
                'province_id' => 34,
                'name' => 'Binjai',
                'type' => 'Kota',
                'postal_code' => '20712',
            ),
            70 => 
            array (
                'id' => 71,
                'province_id' => 17,
                'name' => 'Bintan',
                'type' => 'Kabupaten',
                'postal_code' => '29135',
            ),
            71 => 
            array (
                'id' => 72,
                'province_id' => 21,
                'name' => 'Bireuen',
                'type' => 'Kabupaten',
                'postal_code' => '24219',
            ),
            72 => 
            array (
                'id' => 73,
                'province_id' => 31,
                'name' => 'Bitung',
                'type' => 'Kota',
                'postal_code' => '95512',
            ),
            73 => 
            array (
                'id' => 74,
                'province_id' => 11,
                'name' => 'Blitar',
                'type' => 'Kabupaten',
                'postal_code' => '66171',
            ),
            74 => 
            array (
                'id' => 75,
                'province_id' => 11,
                'name' => 'Blitar',
                'type' => 'Kota',
                'postal_code' => '66124',
            ),
            75 => 
            array (
                'id' => 76,
                'province_id' => 10,
                'name' => 'Blora',
                'type' => 'Kabupaten',
                'postal_code' => '58219',
            ),
            76 => 
            array (
                'id' => 77,
                'province_id' => 7,
                'name' => 'Boalemo',
                'type' => 'Kabupaten',
                'postal_code' => '96319',
            ),
            77 => 
            array (
                'id' => 78,
                'province_id' => 9,
                'name' => 'Bogor',
                'type' => 'Kabupaten',
                'postal_code' => '16911',
            ),
            78 => 
            array (
                'id' => 79,
                'province_id' => 9,
                'name' => 'Bogor',
                'type' => 'Kota',
                'postal_code' => '16119',
            ),
            79 => 
            array (
                'id' => 80,
                'province_id' => 11,
                'name' => 'Bojonegoro',
                'type' => 'Kabupaten',
                'postal_code' => '62119',
            ),
            80 => 
            array (
                'id' => 81,
                'province_id' => 31,
            'name' => 'Bolaang Mongondow (Bolmong)',
                'type' => 'Kabupaten',
                'postal_code' => '95755',
            ),
            81 => 
            array (
                'id' => 82,
                'province_id' => 31,
                'name' => 'Bolaang Mongondow Selatan',
                'type' => 'Kabupaten',
                'postal_code' => '95774',
            ),
            82 => 
            array (
                'id' => 83,
                'province_id' => 31,
                'name' => 'Bolaang Mongondow Timur',
                'type' => 'Kabupaten',
                'postal_code' => '95783',
            ),
            83 => 
            array (
                'id' => 84,
                'province_id' => 31,
                'name' => 'Bolaang Mongondow Utara',
                'type' => 'Kabupaten',
                'postal_code' => '95765',
            ),
            84 => 
            array (
                'id' => 85,
                'province_id' => 30,
                'name' => 'Bombana',
                'type' => 'Kabupaten',
                'postal_code' => '93771',
            ),
            85 => 
            array (
                'id' => 86,
                'province_id' => 11,
                'name' => 'Bondowoso',
                'type' => 'Kabupaten',
                'postal_code' => '68219',
            ),
            86 => 
            array (
                'id' => 87,
                'province_id' => 28,
                'name' => 'Bone',
                'type' => 'Kabupaten',
                'postal_code' => '92713',
            ),
            87 => 
            array (
                'id' => 88,
                'province_id' => 7,
                'name' => 'Bone Bolango',
                'type' => 'Kabupaten',
                'postal_code' => '96511',
            ),
            88 => 
            array (
                'id' => 89,
                'province_id' => 15,
                'name' => 'Bontang',
                'type' => 'Kota',
                'postal_code' => '75313',
            ),
            89 => 
            array (
                'id' => 90,
                'province_id' => 24,
                'name' => 'Boven Digoel',
                'type' => 'Kabupaten',
                'postal_code' => '99662',
            ),
            90 => 
            array (
                'id' => 91,
                'province_id' => 10,
                'name' => 'Boyolali',
                'type' => 'Kabupaten',
                'postal_code' => '57312',
            ),
            91 => 
            array (
                'id' => 92,
                'province_id' => 10,
                'name' => 'Brebes',
                'type' => 'Kabupaten',
                'postal_code' => '52212',
            ),
            92 => 
            array (
                'id' => 93,
                'province_id' => 32,
                'name' => 'Bukittinggi',
                'type' => 'Kota',
                'postal_code' => '26115',
            ),
            93 => 
            array (
                'id' => 94,
                'province_id' => 1,
                'name' => 'Buleleng',
                'type' => 'Kabupaten',
                'postal_code' => '81111',
            ),
            94 => 
            array (
                'id' => 95,
                'province_id' => 28,
                'name' => 'Bulukumba',
                'type' => 'Kabupaten',
                'postal_code' => '92511',
            ),
            95 => 
            array (
                'id' => 96,
                'province_id' => 16,
            'name' => 'Bulungan (Bulongan)',
                'type' => 'Kabupaten',
                'postal_code' => '77211',
            ),
            96 => 
            array (
                'id' => 97,
                'province_id' => 8,
                'name' => 'Bungo',
                'type' => 'Kabupaten',
                'postal_code' => '37216',
            ),
            97 => 
            array (
                'id' => 98,
                'province_id' => 29,
                'name' => 'Buol',
                'type' => 'Kabupaten',
                'postal_code' => '94564',
            ),
            98 => 
            array (
                'id' => 99,
                'province_id' => 19,
                'name' => 'Buru',
                'type' => 'Kabupaten',
                'postal_code' => '97371',
            ),
            99 => 
            array (
                'id' => 100,
                'province_id' => 19,
                'name' => 'Buru Selatan',
                'type' => 'Kabupaten',
                'postal_code' => '97351',
            ),
            100 => 
            array (
                'id' => 101,
                'province_id' => 30,
                'name' => 'Buton',
                'type' => 'Kabupaten',
                'postal_code' => '93754',
            ),
            101 => 
            array (
                'id' => 102,
                'province_id' => 30,
                'name' => 'Buton Utara',
                'type' => 'Kabupaten',
                'postal_code' => '93745',
            ),
            102 => 
            array (
                'id' => 103,
                'province_id' => 9,
                'name' => 'Ciamis',
                'type' => 'Kabupaten',
                'postal_code' => '46211',
            ),
            103 => 
            array (
                'id' => 104,
                'province_id' => 9,
                'name' => 'Cianjur',
                'type' => 'Kabupaten',
                'postal_code' => '43217',
            ),
            104 => 
            array (
                'id' => 105,
                'province_id' => 10,
                'name' => 'Cilacap',
                'type' => 'Kabupaten',
                'postal_code' => '53211',
            ),
            105 => 
            array (
                'id' => 106,
                'province_id' => 3,
                'name' => 'Cilegon',
                'type' => 'Kota',
                'postal_code' => '42417',
            ),
            106 => 
            array (
                'id' => 107,
                'province_id' => 9,
                'name' => 'Cimahi',
                'type' => 'Kota',
                'postal_code' => '40512',
            ),
            107 => 
            array (
                'id' => 108,
                'province_id' => 9,
                'name' => 'Cirebon',
                'type' => 'Kabupaten',
                'postal_code' => '45611',
            ),
            108 => 
            array (
                'id' => 109,
                'province_id' => 9,
                'name' => 'Cirebon',
                'type' => 'Kota',
                'postal_code' => '45116',
            ),
            109 => 
            array (
                'id' => 110,
                'province_id' => 34,
                'name' => 'Dairi',
                'type' => 'Kabupaten',
                'postal_code' => '22211',
            ),
            110 => 
            array (
                'id' => 111,
                'province_id' => 24,
            'name' => 'Deiyai (Deliyai)',
                'type' => 'Kabupaten',
                'postal_code' => '98784',
            ),
            111 => 
            array (
                'id' => 112,
                'province_id' => 34,
                'name' => 'Deli Serdang',
                'type' => 'Kabupaten',
                'postal_code' => '20511',
            ),
            112 => 
            array (
                'id' => 113,
                'province_id' => 10,
                'name' => 'Demak',
                'type' => 'Kabupaten',
                'postal_code' => '59519',
            ),
            113 => 
            array (
                'id' => 114,
                'province_id' => 1,
                'name' => 'Denpasar',
                'type' => 'Kota',
                'postal_code' => '80227',
            ),
            114 => 
            array (
                'id' => 115,
                'province_id' => 9,
                'name' => 'Depok',
                'type' => 'Kota',
                'postal_code' => '16416',
            ),
            115 => 
            array (
                'id' => 116,
                'province_id' => 32,
                'name' => 'Dharmasraya',
                'type' => 'Kabupaten',
                'postal_code' => '27612',
            ),
            116 => 
            array (
                'id' => 117,
                'province_id' => 24,
                'name' => 'Dogiyai',
                'type' => 'Kabupaten',
                'postal_code' => '98866',
            ),
            117 => 
            array (
                'id' => 118,
                'province_id' => 22,
                'name' => 'Dompu',
                'type' => 'Kabupaten',
                'postal_code' => '84217',
            ),
            118 => 
            array (
                'id' => 119,
                'province_id' => 29,
                'name' => 'Donggala',
                'type' => 'Kabupaten',
                'postal_code' => '94341',
            ),
            119 => 
            array (
                'id' => 120,
                'province_id' => 26,
                'name' => 'Dumai',
                'type' => 'Kota',
                'postal_code' => '28811',
            ),
            120 => 
            array (
                'id' => 121,
                'province_id' => 33,
                'name' => 'Empat Lawang',
                'type' => 'Kabupaten',
                'postal_code' => '31811',
            ),
            121 => 
            array (
                'id' => 122,
                'province_id' => 23,
                'name' => 'Ende',
                'type' => 'Kabupaten',
                'postal_code' => '86351',
            ),
            122 => 
            array (
                'id' => 123,
                'province_id' => 28,
                'name' => 'Enrekang',
                'type' => 'Kabupaten',
                'postal_code' => '91719',
            ),
            123 => 
            array (
                'id' => 124,
                'province_id' => 25,
                'name' => 'Fakfak',
                'type' => 'Kabupaten',
                'postal_code' => '98651',
            ),
            124 => 
            array (
                'id' => 125,
                'province_id' => 23,
                'name' => 'Flores Timur',
                'type' => 'Kabupaten',
                'postal_code' => '86213',
            ),
            125 => 
            array (
                'id' => 126,
                'province_id' => 9,
                'name' => 'Garut',
                'type' => 'Kabupaten',
                'postal_code' => '44126',
            ),
            126 => 
            array (
                'id' => 127,
                'province_id' => 21,
                'name' => 'Gayo Lues',
                'type' => 'Kabupaten',
                'postal_code' => '24653',
            ),
            127 => 
            array (
                'id' => 128,
                'province_id' => 1,
                'name' => 'Gianyar',
                'type' => 'Kabupaten',
                'postal_code' => '80519',
            ),
            128 => 
            array (
                'id' => 129,
                'province_id' => 7,
                'name' => 'Gorontalo',
                'type' => 'Kabupaten',
                'postal_code' => '96218',
            ),
            129 => 
            array (
                'id' => 130,
                'province_id' => 7,
                'name' => 'Gorontalo',
                'type' => 'Kota',
                'postal_code' => '96115',
            ),
            130 => 
            array (
                'id' => 131,
                'province_id' => 7,
                'name' => 'Gorontalo Utara',
                'type' => 'Kabupaten',
                'postal_code' => '96611',
            ),
            131 => 
            array (
                'id' => 132,
                'province_id' => 28,
                'name' => 'Gowa',
                'type' => 'Kabupaten',
                'postal_code' => '92111',
            ),
            132 => 
            array (
                'id' => 133,
                'province_id' => 11,
                'name' => 'Gresik',
                'type' => 'Kabupaten',
                'postal_code' => '61115',
            ),
            133 => 
            array (
                'id' => 134,
                'province_id' => 10,
                'name' => 'Grobogan',
                'type' => 'Kabupaten',
                'postal_code' => '58111',
            ),
            134 => 
            array (
                'id' => 135,
                'province_id' => 5,
                'name' => 'Gunung Kidul',
                'type' => 'Kabupaten',
                'postal_code' => '55812',
            ),
            135 => 
            array (
                'id' => 136,
                'province_id' => 14,
                'name' => 'Gunung Mas',
                'type' => 'Kabupaten',
                'postal_code' => '74511',
            ),
            136 => 
            array (
                'id' => 137,
                'province_id' => 34,
                'name' => 'Gunungsitoli',
                'type' => 'Kota',
                'postal_code' => '22813',
            ),
            137 => 
            array (
                'id' => 138,
                'province_id' => 20,
                'name' => 'Halmahera Barat',
                'type' => 'Kabupaten',
                'postal_code' => '97757',
            ),
            138 => 
            array (
                'id' => 139,
                'province_id' => 20,
                'name' => 'Halmahera Selatan',
                'type' => 'Kabupaten',
                'postal_code' => '97911',
            ),
            139 => 
            array (
                'id' => 140,
                'province_id' => 20,
                'name' => 'Halmahera Tengah',
                'type' => 'Kabupaten',
                'postal_code' => '97853',
            ),
            140 => 
            array (
                'id' => 141,
                'province_id' => 20,
                'name' => 'Halmahera Timur',
                'type' => 'Kabupaten',
                'postal_code' => '97862',
            ),
            141 => 
            array (
                'id' => 142,
                'province_id' => 20,
                'name' => 'Halmahera Utara',
                'type' => 'Kabupaten',
                'postal_code' => '97762',
            ),
            142 => 
            array (
                'id' => 143,
                'province_id' => 13,
                'name' => 'Hulu Sungai Selatan',
                'type' => 'Kabupaten',
                'postal_code' => '71212',
            ),
            143 => 
            array (
                'id' => 144,
                'province_id' => 13,
                'name' => 'Hulu Sungai Tengah',
                'type' => 'Kabupaten',
                'postal_code' => '71313',
            ),
            144 => 
            array (
                'id' => 145,
                'province_id' => 13,
                'name' => 'Hulu Sungai Utara',
                'type' => 'Kabupaten',
                'postal_code' => '71419',
            ),
            145 => 
            array (
                'id' => 146,
                'province_id' => 34,
                'name' => 'Humbang Hasundutan',
                'type' => 'Kabupaten',
                'postal_code' => '22457',
            ),
            146 => 
            array (
                'id' => 147,
                'province_id' => 26,
                'name' => 'Indragiri Hilir',
                'type' => 'Kabupaten',
                'postal_code' => '29212',
            ),
            147 => 
            array (
                'id' => 148,
                'province_id' => 26,
                'name' => 'Indragiri Hulu',
                'type' => 'Kabupaten',
                'postal_code' => '29319',
            ),
            148 => 
            array (
                'id' => 149,
                'province_id' => 9,
                'name' => 'Indramayu',
                'type' => 'Kabupaten',
                'postal_code' => '45214',
            ),
            149 => 
            array (
                'id' => 150,
                'province_id' => 24,
                'name' => 'Intan Jaya',
                'type' => 'Kabupaten',
                'postal_code' => '98771',
            ),
            150 => 
            array (
                'id' => 151,
                'province_id' => 6,
                'name' => 'Jakarta Barat',
                'type' => 'Kota',
                'postal_code' => '11220',
            ),
            151 => 
            array (
                'id' => 152,
                'province_id' => 6,
                'name' => 'Jakarta Pusat',
                'type' => 'Kota',
                'postal_code' => '10540',
            ),
            152 => 
            array (
                'id' => 153,
                'province_id' => 6,
                'name' => 'Jakarta Selatan',
                'type' => 'Kota',
                'postal_code' => '12230',
            ),
            153 => 
            array (
                'id' => 154,
                'province_id' => 6,
                'name' => 'Jakarta Timur',
                'type' => 'Kota',
                'postal_code' => '13330',
            ),
            154 => 
            array (
                'id' => 155,
                'province_id' => 6,
                'name' => 'Jakarta Utara',
                'type' => 'Kota',
                'postal_code' => '14140',
            ),
            155 => 
            array (
                'id' => 156,
                'province_id' => 8,
                'name' => 'Jambi',
                'type' => 'Kota',
                'postal_code' => '36111',
            ),
            156 => 
            array (
                'id' => 157,
                'province_id' => 24,
                'name' => 'Jayapura',
                'type' => 'Kabupaten',
                'postal_code' => '99352',
            ),
            157 => 
            array (
                'id' => 158,
                'province_id' => 24,
                'name' => 'Jayapura',
                'type' => 'Kota',
                'postal_code' => '99114',
            ),
            158 => 
            array (
                'id' => 159,
                'province_id' => 24,
                'name' => 'Jayawijaya',
                'type' => 'Kabupaten',
                'postal_code' => '99511',
            ),
            159 => 
            array (
                'id' => 160,
                'province_id' => 11,
                'name' => 'Jember',
                'type' => 'Kabupaten',
                'postal_code' => '68113',
            ),
            160 => 
            array (
                'id' => 161,
                'province_id' => 1,
                'name' => 'Jembrana',
                'type' => 'Kabupaten',
                'postal_code' => '82251',
            ),
            161 => 
            array (
                'id' => 162,
                'province_id' => 28,
                'name' => 'Jeneponto',
                'type' => 'Kabupaten',
                'postal_code' => '92319',
            ),
            162 => 
            array (
                'id' => 163,
                'province_id' => 10,
                'name' => 'Jepara',
                'type' => 'Kabupaten',
                'postal_code' => '59419',
            ),
            163 => 
            array (
                'id' => 164,
                'province_id' => 11,
                'name' => 'Jombang',
                'type' => 'Kabupaten',
                'postal_code' => '61415',
            ),
            164 => 
            array (
                'id' => 165,
                'province_id' => 25,
                'name' => 'Kaimana',
                'type' => 'Kabupaten',
                'postal_code' => '98671',
            ),
            165 => 
            array (
                'id' => 166,
                'province_id' => 26,
                'name' => 'Kampar',
                'type' => 'Kabupaten',
                'postal_code' => '28411',
            ),
            166 => 
            array (
                'id' => 167,
                'province_id' => 14,
                'name' => 'Kapuas',
                'type' => 'Kabupaten',
                'postal_code' => '73583',
            ),
            167 => 
            array (
                'id' => 168,
                'province_id' => 12,
                'name' => 'Kapuas Hulu',
                'type' => 'Kabupaten',
                'postal_code' => '78719',
            ),
            168 => 
            array (
                'id' => 169,
                'province_id' => 10,
                'name' => 'Karanganyar',
                'type' => 'Kabupaten',
                'postal_code' => '57718',
            ),
            169 => 
            array (
                'id' => 170,
                'province_id' => 1,
                'name' => 'Karangasem',
                'type' => 'Kabupaten',
                'postal_code' => '80819',
            ),
            170 => 
            array (
                'id' => 171,
                'province_id' => 9,
                'name' => 'Karawang',
                'type' => 'Kabupaten',
                'postal_code' => '41311',
            ),
            171 => 
            array (
                'id' => 172,
                'province_id' => 17,
                'name' => 'Karimun',
                'type' => 'Kabupaten',
                'postal_code' => '29611',
            ),
            172 => 
            array (
                'id' => 173,
                'province_id' => 34,
                'name' => 'Karo',
                'type' => 'Kabupaten',
                'postal_code' => '22119',
            ),
            173 => 
            array (
                'id' => 174,
                'province_id' => 14,
                'name' => 'Katingan',
                'type' => 'Kabupaten',
                'postal_code' => '74411',
            ),
            174 => 
            array (
                'id' => 175,
                'province_id' => 4,
                'name' => 'Kaur',
                'type' => 'Kabupaten',
                'postal_code' => '38911',
            ),
            175 => 
            array (
                'id' => 176,
                'province_id' => 12,
                'name' => 'Kayong Utara',
                'type' => 'Kabupaten',
                'postal_code' => '78852',
            ),
            176 => 
            array (
                'id' => 177,
                'province_id' => 10,
                'name' => 'Kebumen',
                'type' => 'Kabupaten',
                'postal_code' => '54319',
            ),
            177 => 
            array (
                'id' => 178,
                'province_id' => 11,
                'name' => 'Kediri',
                'type' => 'Kabupaten',
                'postal_code' => '64184',
            ),
            178 => 
            array (
                'id' => 179,
                'province_id' => 11,
                'name' => 'Kediri',
                'type' => 'Kota',
                'postal_code' => '64125',
            ),
            179 => 
            array (
                'id' => 180,
                'province_id' => 24,
                'name' => 'Keerom',
                'type' => 'Kabupaten',
                'postal_code' => '99461',
            ),
            180 => 
            array (
                'id' => 181,
                'province_id' => 10,
                'name' => 'Kendal',
                'type' => 'Kabupaten',
                'postal_code' => '51314',
            ),
            181 => 
            array (
                'id' => 182,
                'province_id' => 30,
                'name' => 'Kendari',
                'type' => 'Kota',
                'postal_code' => '93126',
            ),
            182 => 
            array (
                'id' => 183,
                'province_id' => 4,
                'name' => 'Kepahiang',
                'type' => 'Kabupaten',
                'postal_code' => '39319',
            ),
            183 => 
            array (
                'id' => 184,
                'province_id' => 17,
                'name' => 'Kepulauan Anambas',
                'type' => 'Kabupaten',
                'postal_code' => '29991',
            ),
            184 => 
            array (
                'id' => 185,
                'province_id' => 19,
                'name' => 'Kepulauan Aru',
                'type' => 'Kabupaten',
                'postal_code' => '97681',
            ),
            185 => 
            array (
                'id' => 186,
                'province_id' => 32,
                'name' => 'Kepulauan Mentawai',
                'type' => 'Kabupaten',
                'postal_code' => '25771',
            ),
            186 => 
            array (
                'id' => 187,
                'province_id' => 26,
                'name' => 'Kepulauan Meranti',
                'type' => 'Kabupaten',
                'postal_code' => '28791',
            ),
            187 => 
            array (
                'id' => 188,
                'province_id' => 31,
                'name' => 'Kepulauan Sangihe',
                'type' => 'Kabupaten',
                'postal_code' => '95819',
            ),
            188 => 
            array (
                'id' => 189,
                'province_id' => 6,
                'name' => 'Kepulauan Seribu',
                'type' => 'Kabupaten',
                'postal_code' => '14550',
            ),
            189 => 
            array (
                'id' => 190,
                'province_id' => 31,
            'name' => 'Kepulauan Siau Tagulandang Biaro (Sitaro)',
                'type' => 'Kabupaten',
                'postal_code' => '95862',
            ),
            190 => 
            array (
                'id' => 191,
                'province_id' => 20,
                'name' => 'Kepulauan Sula',
                'type' => 'Kabupaten',
                'postal_code' => '97995',
            ),
            191 => 
            array (
                'id' => 192,
                'province_id' => 31,
                'name' => 'Kepulauan Talaud',
                'type' => 'Kabupaten',
                'postal_code' => '95885',
            ),
            192 => 
            array (
                'id' => 193,
                'province_id' => 24,
            'name' => 'Kepulauan Yapen (Yapen Waropen)',
                'type' => 'Kabupaten',
                'postal_code' => '98211',
            ),
            193 => 
            array (
                'id' => 194,
                'province_id' => 8,
                'name' => 'Kerinci',
                'type' => 'Kabupaten',
                'postal_code' => '37167',
            ),
            194 => 
            array (
                'id' => 195,
                'province_id' => 12,
                'name' => 'Ketapang',
                'type' => 'Kabupaten',
                'postal_code' => '78874',
            ),
            195 => 
            array (
                'id' => 196,
                'province_id' => 10,
                'name' => 'Klaten',
                'type' => 'Kabupaten',
                'postal_code' => '57411',
            ),
            196 => 
            array (
                'id' => 197,
                'province_id' => 1,
                'name' => 'Klungkung',
                'type' => 'Kabupaten',
                'postal_code' => '80719',
            ),
            197 => 
            array (
                'id' => 198,
                'province_id' => 30,
                'name' => 'Kolaka',
                'type' => 'Kabupaten',
                'postal_code' => '93511',
            ),
            198 => 
            array (
                'id' => 199,
                'province_id' => 30,
                'name' => 'Kolaka Utara',
                'type' => 'Kabupaten',
                'postal_code' => '93911',
            ),
            199 => 
            array (
                'id' => 200,
                'province_id' => 30,
                'name' => 'Konawe',
                'type' => 'Kabupaten',
                'postal_code' => '93411',
            ),
            200 => 
            array (
                'id' => 201,
                'province_id' => 30,
                'name' => 'Konawe Selatan',
                'type' => 'Kabupaten',
                'postal_code' => '93811',
            ),
            201 => 
            array (
                'id' => 202,
                'province_id' => 30,
                'name' => 'Konawe Utara',
                'type' => 'Kabupaten',
                'postal_code' => '93311',
            ),
            202 => 
            array (
                'id' => 203,
                'province_id' => 13,
                'name' => 'Kotabaru',
                'type' => 'Kabupaten',
                'postal_code' => '72119',
            ),
            203 => 
            array (
                'id' => 204,
                'province_id' => 31,
                'name' => 'Kotamobagu',
                'type' => 'Kota',
                'postal_code' => '95711',
            ),
            204 => 
            array (
                'id' => 205,
                'province_id' => 14,
                'name' => 'Kotawaringin Barat',
                'type' => 'Kabupaten',
                'postal_code' => '74119',
            ),
            205 => 
            array (
                'id' => 206,
                'province_id' => 14,
                'name' => 'Kotawaringin Timur',
                'type' => 'Kabupaten',
                'postal_code' => '74364',
            ),
            206 => 
            array (
                'id' => 207,
                'province_id' => 26,
                'name' => 'Kuantan Singingi',
                'type' => 'Kabupaten',
                'postal_code' => '29519',
            ),
            207 => 
            array (
                'id' => 208,
                'province_id' => 12,
                'name' => 'Kubu Raya',
                'type' => 'Kabupaten',
                'postal_code' => '78311',
            ),
            208 => 
            array (
                'id' => 209,
                'province_id' => 10,
                'name' => 'Kudus',
                'type' => 'Kabupaten',
                'postal_code' => '59311',
            ),
            209 => 
            array (
                'id' => 210,
                'province_id' => 5,
                'name' => 'Kulon Progo',
                'type' => 'Kabupaten',
                'postal_code' => '55611',
            ),
            210 => 
            array (
                'id' => 211,
                'province_id' => 9,
                'name' => 'Kuningan',
                'type' => 'Kabupaten',
                'postal_code' => '45511',
            ),
            211 => 
            array (
                'id' => 212,
                'province_id' => 23,
                'name' => 'Kupang',
                'type' => 'Kabupaten',
                'postal_code' => '85362',
            ),
            212 => 
            array (
                'id' => 213,
                'province_id' => 23,
                'name' => 'Kupang',
                'type' => 'Kota',
                'postal_code' => '85119',
            ),
            213 => 
            array (
                'id' => 214,
                'province_id' => 15,
                'name' => 'Kutai Barat',
                'type' => 'Kabupaten',
                'postal_code' => '75711',
            ),
            214 => 
            array (
                'id' => 215,
                'province_id' => 15,
                'name' => 'Kutai Kartanegara',
                'type' => 'Kabupaten',
                'postal_code' => '75511',
            ),
            215 => 
            array (
                'id' => 216,
                'province_id' => 15,
                'name' => 'Kutai Timur',
                'type' => 'Kabupaten',
                'postal_code' => '75611',
            ),
            216 => 
            array (
                'id' => 217,
                'province_id' => 34,
                'name' => 'Labuhan Batu',
                'type' => 'Kabupaten',
                'postal_code' => '21412',
            ),
            217 => 
            array (
                'id' => 218,
                'province_id' => 34,
                'name' => 'Labuhan Batu Selatan',
                'type' => 'Kabupaten',
                'postal_code' => '21511',
            ),
            218 => 
            array (
                'id' => 219,
                'province_id' => 34,
                'name' => 'Labuhan Batu Utara',
                'type' => 'Kabupaten',
                'postal_code' => '21711',
            ),
            219 => 
            array (
                'id' => 220,
                'province_id' => 33,
                'name' => 'Lahat',
                'type' => 'Kabupaten',
                'postal_code' => '31419',
            ),
            220 => 
            array (
                'id' => 221,
                'province_id' => 14,
                'name' => 'Lamandau',
                'type' => 'Kabupaten',
                'postal_code' => '74611',
            ),
            221 => 
            array (
                'id' => 222,
                'province_id' => 11,
                'name' => 'Lamongan',
                'type' => 'Kabupaten',
                'postal_code' => '64125',
            ),
            222 => 
            array (
                'id' => 223,
                'province_id' => 18,
                'name' => 'Lampung Barat',
                'type' => 'Kabupaten',
                'postal_code' => '34814',
            ),
            223 => 
            array (
                'id' => 224,
                'province_id' => 18,
                'name' => 'Lampung Selatan',
                'type' => 'Kabupaten',
                'postal_code' => '35511',
            ),
            224 => 
            array (
                'id' => 225,
                'province_id' => 18,
                'name' => 'Lampung Tengah',
                'type' => 'Kabupaten',
                'postal_code' => '34212',
            ),
            225 => 
            array (
                'id' => 226,
                'province_id' => 18,
                'name' => 'Lampung Timur',
                'type' => 'Kabupaten',
                'postal_code' => '34319',
            ),
            226 => 
            array (
                'id' => 227,
                'province_id' => 18,
                'name' => 'Lampung Utara',
                'type' => 'Kabupaten',
                'postal_code' => '34516',
            ),
            227 => 
            array (
                'id' => 228,
                'province_id' => 12,
                'name' => 'Landak',
                'type' => 'Kabupaten',
                'postal_code' => '78319',
            ),
            228 => 
            array (
                'id' => 229,
                'province_id' => 34,
                'name' => 'Langkat',
                'type' => 'Kabupaten',
                'postal_code' => '20811',
            ),
            229 => 
            array (
                'id' => 230,
                'province_id' => 21,
                'name' => 'Langsa',
                'type' => 'Kota',
                'postal_code' => '24412',
            ),
            230 => 
            array (
                'id' => 231,
                'province_id' => 24,
                'name' => 'Lanny Jaya',
                'type' => 'Kabupaten',
                'postal_code' => '99531',
            ),
            231 => 
            array (
                'id' => 232,
                'province_id' => 3,
                'name' => 'Lebak',
                'type' => 'Kabupaten',
                'postal_code' => '42319',
            ),
            232 => 
            array (
                'id' => 233,
                'province_id' => 4,
                'name' => 'Lebong',
                'type' => 'Kabupaten',
                'postal_code' => '39264',
            ),
            233 => 
            array (
                'id' => 234,
                'province_id' => 23,
                'name' => 'Lembata',
                'type' => 'Kabupaten',
                'postal_code' => '86611',
            ),
            234 => 
            array (
                'id' => 235,
                'province_id' => 21,
                'name' => 'Lhokseumawe',
                'type' => 'Kota',
                'postal_code' => '24352',
            ),
            235 => 
            array (
                'id' => 236,
                'province_id' => 32,
                'name' => 'Lima Puluh Koto/Kota',
                'type' => 'Kabupaten',
                'postal_code' => '26671',
            ),
            236 => 
            array (
                'id' => 237,
                'province_id' => 17,
                'name' => 'Lingga',
                'type' => 'Kabupaten',
                'postal_code' => '29811',
            ),
            237 => 
            array (
                'id' => 238,
                'province_id' => 22,
                'name' => 'Lombok Barat',
                'type' => 'Kabupaten',
                'postal_code' => '83311',
            ),
            238 => 
            array (
                'id' => 239,
                'province_id' => 22,
                'name' => 'Lombok Tengah',
                'type' => 'Kabupaten',
                'postal_code' => '83511',
            ),
            239 => 
            array (
                'id' => 240,
                'province_id' => 22,
                'name' => 'Lombok Timur',
                'type' => 'Kabupaten',
                'postal_code' => '83612',
            ),
            240 => 
            array (
                'id' => 241,
                'province_id' => 22,
                'name' => 'Lombok Utara',
                'type' => 'Kabupaten',
                'postal_code' => '83711',
            ),
            241 => 
            array (
                'id' => 242,
                'province_id' => 33,
                'name' => 'Lubuk Linggau',
                'type' => 'Kota',
                'postal_code' => '31614',
            ),
            242 => 
            array (
                'id' => 243,
                'province_id' => 11,
                'name' => 'Lumajang',
                'type' => 'Kabupaten',
                'postal_code' => '67319',
            ),
            243 => 
            array (
                'id' => 244,
                'province_id' => 28,
                'name' => 'Luwu',
                'type' => 'Kabupaten',
                'postal_code' => '91994',
            ),
            244 => 
            array (
                'id' => 245,
                'province_id' => 28,
                'name' => 'Luwu Timur',
                'type' => 'Kabupaten',
                'postal_code' => '92981',
            ),
            245 => 
            array (
                'id' => 246,
                'province_id' => 28,
                'name' => 'Luwu Utara',
                'type' => 'Kabupaten',
                'postal_code' => '92911',
            ),
            246 => 
            array (
                'id' => 247,
                'province_id' => 11,
                'name' => 'Madiun',
                'type' => 'Kabupaten',
                'postal_code' => '63153',
            ),
            247 => 
            array (
                'id' => 248,
                'province_id' => 11,
                'name' => 'Madiun',
                'type' => 'Kota',
                'postal_code' => '63122',
            ),
            248 => 
            array (
                'id' => 249,
                'province_id' => 10,
                'name' => 'Magelang',
                'type' => 'Kabupaten',
                'postal_code' => '56519',
            ),
            249 => 
            array (
                'id' => 250,
                'province_id' => 10,
                'name' => 'Magelang',
                'type' => 'Kota',
                'postal_code' => '56133',
            ),
            250 => 
            array (
                'id' => 251,
                'province_id' => 11,
                'name' => 'Magetan',
                'type' => 'Kabupaten',
                'postal_code' => '63314',
            ),
            251 => 
            array (
                'id' => 252,
                'province_id' => 9,
                'name' => 'Majalengka',
                'type' => 'Kabupaten',
                'postal_code' => '45412',
            ),
            252 => 
            array (
                'id' => 253,
                'province_id' => 27,
                'name' => 'Majene',
                'type' => 'Kabupaten',
                'postal_code' => '91411',
            ),
            253 => 
            array (
                'id' => 254,
                'province_id' => 28,
                'name' => 'Makassar',
                'type' => 'Kota',
                'postal_code' => '90111',
            ),
            254 => 
            array (
                'id' => 255,
                'province_id' => 11,
                'name' => 'Malang',
                'type' => 'Kabupaten',
                'postal_code' => '65163',
            ),
            255 => 
            array (
                'id' => 256,
                'province_id' => 11,
                'name' => 'Malang',
                'type' => 'Kota',
                'postal_code' => '65112',
            ),
            256 => 
            array (
                'id' => 257,
                'province_id' => 16,
                'name' => 'Malinau',
                'type' => 'Kabupaten',
                'postal_code' => '77511',
            ),
            257 => 
            array (
                'id' => 258,
                'province_id' => 19,
                'name' => 'Maluku Barat Daya',
                'type' => 'Kabupaten',
                'postal_code' => '97451',
            ),
            258 => 
            array (
                'id' => 259,
                'province_id' => 19,
                'name' => 'Maluku Tengah',
                'type' => 'Kabupaten',
                'postal_code' => '97513',
            ),
            259 => 
            array (
                'id' => 260,
                'province_id' => 19,
                'name' => 'Maluku Tenggara',
                'type' => 'Kabupaten',
                'postal_code' => '97651',
            ),
            260 => 
            array (
                'id' => 261,
                'province_id' => 19,
                'name' => 'Maluku Tenggara Barat',
                'type' => 'Kabupaten',
                'postal_code' => '97465',
            ),
            261 => 
            array (
                'id' => 262,
                'province_id' => 27,
                'name' => 'Mamasa',
                'type' => 'Kabupaten',
                'postal_code' => '91362',
            ),
            262 => 
            array (
                'id' => 263,
                'province_id' => 24,
                'name' => 'Mamberamo Raya',
                'type' => 'Kabupaten',
                'postal_code' => '99381',
            ),
            263 => 
            array (
                'id' => 264,
                'province_id' => 24,
                'name' => 'Mamberamo Tengah',
                'type' => 'Kabupaten',
                'postal_code' => '99553',
            ),
            264 => 
            array (
                'id' => 265,
                'province_id' => 27,
                'name' => 'Mamuju',
                'type' => 'Kabupaten',
                'postal_code' => '91519',
            ),
            265 => 
            array (
                'id' => 266,
                'province_id' => 27,
                'name' => 'Mamuju Utara',
                'type' => 'Kabupaten',
                'postal_code' => '91571',
            ),
            266 => 
            array (
                'id' => 267,
                'province_id' => 31,
                'name' => 'Manado',
                'type' => 'Kota',
                'postal_code' => '95247',
            ),
            267 => 
            array (
                'id' => 268,
                'province_id' => 34,
                'name' => 'Mandailing Natal',
                'type' => 'Kabupaten',
                'postal_code' => '22916',
            ),
            268 => 
            array (
                'id' => 269,
                'province_id' => 23,
                'name' => 'Manggarai',
                'type' => 'Kabupaten',
                'postal_code' => '86551',
            ),
            269 => 
            array (
                'id' => 270,
                'province_id' => 23,
                'name' => 'Manggarai Barat',
                'type' => 'Kabupaten',
                'postal_code' => '86711',
            ),
            270 => 
            array (
                'id' => 271,
                'province_id' => 23,
                'name' => 'Manggarai Timur',
                'type' => 'Kabupaten',
                'postal_code' => '86811',
            ),
            271 => 
            array (
                'id' => 272,
                'province_id' => 25,
                'name' => 'Manokwari',
                'type' => 'Kabupaten',
                'postal_code' => '98311',
            ),
            272 => 
            array (
                'id' => 273,
                'province_id' => 25,
                'name' => 'Manokwari Selatan',
                'type' => 'Kabupaten',
                'postal_code' => '98355',
            ),
            273 => 
            array (
                'id' => 274,
                'province_id' => 24,
                'name' => 'Mappi',
                'type' => 'Kabupaten',
                'postal_code' => '99853',
            ),
            274 => 
            array (
                'id' => 275,
                'province_id' => 28,
                'name' => 'Maros',
                'type' => 'Kabupaten',
                'postal_code' => '90511',
            ),
            275 => 
            array (
                'id' => 276,
                'province_id' => 22,
                'name' => 'Mataram',
                'type' => 'Kota',
                'postal_code' => '83131',
            ),
            276 => 
            array (
                'id' => 277,
                'province_id' => 25,
                'name' => 'Maybrat',
                'type' => 'Kabupaten',
                'postal_code' => '98051',
            ),
            277 => 
            array (
                'id' => 278,
                'province_id' => 34,
                'name' => 'Medan',
                'type' => 'Kota',
                'postal_code' => '20228',
            ),
            278 => 
            array (
                'id' => 279,
                'province_id' => 12,
                'name' => 'Melawi',
                'type' => 'Kabupaten',
                'postal_code' => '78619',
            ),
            279 => 
            array (
                'id' => 280,
                'province_id' => 8,
                'name' => 'Merangin',
                'type' => 'Kabupaten',
                'postal_code' => '37319',
            ),
            280 => 
            array (
                'id' => 281,
                'province_id' => 24,
                'name' => 'Merauke',
                'type' => 'Kabupaten',
                'postal_code' => '99613',
            ),
            281 => 
            array (
                'id' => 282,
                'province_id' => 18,
                'name' => 'Mesuji',
                'type' => 'Kabupaten',
                'postal_code' => '34911',
            ),
            282 => 
            array (
                'id' => 283,
                'province_id' => 18,
                'name' => 'Metro',
                'type' => 'Kota',
                'postal_code' => '34111',
            ),
            283 => 
            array (
                'id' => 284,
                'province_id' => 24,
                'name' => 'Mimika',
                'type' => 'Kabupaten',
                'postal_code' => '99962',
            ),
            284 => 
            array (
                'id' => 285,
                'province_id' => 31,
                'name' => 'Minahasa',
                'type' => 'Kabupaten',
                'postal_code' => '95614',
            ),
            285 => 
            array (
                'id' => 286,
                'province_id' => 31,
                'name' => 'Minahasa Selatan',
                'type' => 'Kabupaten',
                'postal_code' => '95914',
            ),
            286 => 
            array (
                'id' => 287,
                'province_id' => 31,
                'name' => 'Minahasa Tenggara',
                'type' => 'Kabupaten',
                'postal_code' => '95995',
            ),
            287 => 
            array (
                'id' => 288,
                'province_id' => 31,
                'name' => 'Minahasa Utara',
                'type' => 'Kabupaten',
                'postal_code' => '95316',
            ),
            288 => 
            array (
                'id' => 289,
                'province_id' => 11,
                'name' => 'Mojokerto',
                'type' => 'Kabupaten',
                'postal_code' => '61382',
            ),
            289 => 
            array (
                'id' => 290,
                'province_id' => 11,
                'name' => 'Mojokerto',
                'type' => 'Kota',
                'postal_code' => '61316',
            ),
            290 => 
            array (
                'id' => 291,
                'province_id' => 29,
                'name' => 'Morowali',
                'type' => 'Kabupaten',
                'postal_code' => '94911',
            ),
            291 => 
            array (
                'id' => 292,
                'province_id' => 33,
                'name' => 'Muara Enim',
                'type' => 'Kabupaten',
                'postal_code' => '31315',
            ),
            292 => 
            array (
                'id' => 293,
                'province_id' => 8,
                'name' => 'Muaro Jambi',
                'type' => 'Kabupaten',
                'postal_code' => '36311',
            ),
            293 => 
            array (
                'id' => 294,
                'province_id' => 4,
                'name' => 'Muko Muko',
                'type' => 'Kabupaten',
                'postal_code' => '38715',
            ),
            294 => 
            array (
                'id' => 295,
                'province_id' => 30,
                'name' => 'Muna',
                'type' => 'Kabupaten',
                'postal_code' => '93611',
            ),
            295 => 
            array (
                'id' => 296,
                'province_id' => 14,
                'name' => 'Murung Raya',
                'type' => 'Kabupaten',
                'postal_code' => '73911',
            ),
            296 => 
            array (
                'id' => 297,
                'province_id' => 33,
                'name' => 'Musi Banyuasin',
                'type' => 'Kabupaten',
                'postal_code' => '30719',
            ),
            297 => 
            array (
                'id' => 298,
                'province_id' => 33,
                'name' => 'Musi Rawas',
                'type' => 'Kabupaten',
                'postal_code' => '31661',
            ),
            298 => 
            array (
                'id' => 299,
                'province_id' => 24,
                'name' => 'Nabire',
                'type' => 'Kabupaten',
                'postal_code' => '98816',
            ),
            299 => 
            array (
                'id' => 300,
                'province_id' => 21,
                'name' => 'Nagan Raya',
                'type' => 'Kabupaten',
                'postal_code' => '23674',
            ),
            300 => 
            array (
                'id' => 301,
                'province_id' => 23,
                'name' => 'Nagekeo',
                'type' => 'Kabupaten',
                'postal_code' => '86911',
            ),
            301 => 
            array (
                'id' => 302,
                'province_id' => 17,
                'name' => 'Natuna',
                'type' => 'Kabupaten',
                'postal_code' => '29711',
            ),
            302 => 
            array (
                'id' => 303,
                'province_id' => 24,
                'name' => 'Nduga',
                'type' => 'Kabupaten',
                'postal_code' => '99541',
            ),
            303 => 
            array (
                'id' => 304,
                'province_id' => 23,
                'name' => 'Ngada',
                'type' => 'Kabupaten',
                'postal_code' => '86413',
            ),
            304 => 
            array (
                'id' => 305,
                'province_id' => 11,
                'name' => 'Nganjuk',
                'type' => 'Kabupaten',
                'postal_code' => '64414',
            ),
            305 => 
            array (
                'id' => 306,
                'province_id' => 11,
                'name' => 'Ngawi',
                'type' => 'Kabupaten',
                'postal_code' => '63219',
            ),
            306 => 
            array (
                'id' => 307,
                'province_id' => 34,
                'name' => 'Nias',
                'type' => 'Kabupaten',
                'postal_code' => '22876',
            ),
            307 => 
            array (
                'id' => 308,
                'province_id' => 34,
                'name' => 'Nias Barat',
                'type' => 'Kabupaten',
                'postal_code' => '22895',
            ),
            308 => 
            array (
                'id' => 309,
                'province_id' => 34,
                'name' => 'Nias Selatan',
                'type' => 'Kabupaten',
                'postal_code' => '22865',
            ),
            309 => 
            array (
                'id' => 310,
                'province_id' => 34,
                'name' => 'Nias Utara',
                'type' => 'Kabupaten',
                'postal_code' => '22856',
            ),
            310 => 
            array (
                'id' => 311,
                'province_id' => 16,
                'name' => 'Nunukan',
                'type' => 'Kabupaten',
                'postal_code' => '77421',
            ),
            311 => 
            array (
                'id' => 312,
                'province_id' => 33,
                'name' => 'Ogan Ilir',
                'type' => 'Kabupaten',
                'postal_code' => '30811',
            ),
            312 => 
            array (
                'id' => 313,
                'province_id' => 33,
                'name' => 'Ogan Komering Ilir',
                'type' => 'Kabupaten',
                'postal_code' => '30618',
            ),
            313 => 
            array (
                'id' => 314,
                'province_id' => 33,
                'name' => 'Ogan Komering Ulu',
                'type' => 'Kabupaten',
                'postal_code' => '32112',
            ),
            314 => 
            array (
                'id' => 315,
                'province_id' => 33,
                'name' => 'Ogan Komering Ulu Selatan',
                'type' => 'Kabupaten',
                'postal_code' => '32211',
            ),
            315 => 
            array (
                'id' => 316,
                'province_id' => 33,
                'name' => 'Ogan Komering Ulu Timur',
                'type' => 'Kabupaten',
                'postal_code' => '32312',
            ),
            316 => 
            array (
                'id' => 317,
                'province_id' => 11,
                'name' => 'Pacitan',
                'type' => 'Kabupaten',
                'postal_code' => '63512',
            ),
            317 => 
            array (
                'id' => 318,
                'province_id' => 32,
                'name' => 'Padang',
                'type' => 'Kota',
                'postal_code' => '25112',
            ),
            318 => 
            array (
                'id' => 319,
                'province_id' => 34,
                'name' => 'Padang Lawas',
                'type' => 'Kabupaten',
                'postal_code' => '22763',
            ),
            319 => 
            array (
                'id' => 320,
                'province_id' => 34,
                'name' => 'Padang Lawas Utara',
                'type' => 'Kabupaten',
                'postal_code' => '22753',
            ),
            320 => 
            array (
                'id' => 321,
                'province_id' => 32,
                'name' => 'Padang Panjang',
                'type' => 'Kota',
                'postal_code' => '27122',
            ),
            321 => 
            array (
                'id' => 322,
                'province_id' => 32,
                'name' => 'Padang Pariaman',
                'type' => 'Kabupaten',
                'postal_code' => '25583',
            ),
            322 => 
            array (
                'id' => 323,
                'province_id' => 34,
                'name' => 'Padang Sidempuan',
                'type' => 'Kota',
                'postal_code' => '22727',
            ),
            323 => 
            array (
                'id' => 324,
                'province_id' => 33,
                'name' => 'Pagar Alam',
                'type' => 'Kota',
                'postal_code' => '31512',
            ),
            324 => 
            array (
                'id' => 325,
                'province_id' => 34,
                'name' => 'Pakpak Bharat',
                'type' => 'Kabupaten',
                'postal_code' => '22272',
            ),
            325 => 
            array (
                'id' => 326,
                'province_id' => 14,
                'name' => 'Palangka Raya',
                'type' => 'Kota',
                'postal_code' => '73112',
            ),
            326 => 
            array (
                'id' => 327,
                'province_id' => 33,
                'name' => 'Palembang',
                'type' => 'Kota',
                'postal_code' => '30111',
            ),
            327 => 
            array (
                'id' => 328,
                'province_id' => 28,
                'name' => 'Palopo',
                'type' => 'Kota',
                'postal_code' => '91911',
            ),
            328 => 
            array (
                'id' => 329,
                'province_id' => 29,
                'name' => 'Palu',
                'type' => 'Kota',
                'postal_code' => '94111',
            ),
            329 => 
            array (
                'id' => 330,
                'province_id' => 11,
                'name' => 'Pamekasan',
                'type' => 'Kabupaten',
                'postal_code' => '69319',
            ),
            330 => 
            array (
                'id' => 331,
                'province_id' => 3,
                'name' => 'Pandeglang',
                'type' => 'Kabupaten',
                'postal_code' => '42212',
            ),
            331 => 
            array (
                'id' => 332,
                'province_id' => 9,
                'name' => 'Pangandaran',
                'type' => 'Kabupaten',
                'postal_code' => '46511',
            ),
            332 => 
            array (
                'id' => 333,
                'province_id' => 28,
                'name' => 'Pangkajene Kepulauan',
                'type' => 'Kabupaten',
                'postal_code' => '90611',
            ),
            333 => 
            array (
                'id' => 334,
                'province_id' => 2,
                'name' => 'Pangkal Pinang',
                'type' => 'Kota',
                'postal_code' => '33115',
            ),
            334 => 
            array (
                'id' => 335,
                'province_id' => 24,
                'name' => 'Paniai',
                'type' => 'Kabupaten',
                'postal_code' => '98765',
            ),
            335 => 
            array (
                'id' => 336,
                'province_id' => 28,
                'name' => 'Parepare',
                'type' => 'Kota',
                'postal_code' => '91123',
            ),
            336 => 
            array (
                'id' => 337,
                'province_id' => 32,
                'name' => 'Pariaman',
                'type' => 'Kota',
                'postal_code' => '25511',
            ),
            337 => 
            array (
                'id' => 338,
                'province_id' => 29,
                'name' => 'Parigi Moutong',
                'type' => 'Kabupaten',
                'postal_code' => '94411',
            ),
            338 => 
            array (
                'id' => 339,
                'province_id' => 32,
                'name' => 'Pasaman',
                'type' => 'Kabupaten',
                'postal_code' => '26318',
            ),
            339 => 
            array (
                'id' => 340,
                'province_id' => 32,
                'name' => 'Pasaman Barat',
                'type' => 'Kabupaten',
                'postal_code' => '26511',
            ),
            340 => 
            array (
                'id' => 341,
                'province_id' => 15,
                'name' => 'Paser',
                'type' => 'Kabupaten',
                'postal_code' => '76211',
            ),
            341 => 
            array (
                'id' => 342,
                'province_id' => 11,
                'name' => 'Pasuruan',
                'type' => 'Kabupaten',
                'postal_code' => '67153',
            ),
            342 => 
            array (
                'id' => 343,
                'province_id' => 11,
                'name' => 'Pasuruan',
                'type' => 'Kota',
                'postal_code' => '67118',
            ),
            343 => 
            array (
                'id' => 344,
                'province_id' => 10,
                'name' => 'Pati',
                'type' => 'Kabupaten',
                'postal_code' => '59114',
            ),
            344 => 
            array (
                'id' => 345,
                'province_id' => 32,
                'name' => 'Payakumbuh',
                'type' => 'Kota',
                'postal_code' => '26213',
            ),
            345 => 
            array (
                'id' => 346,
                'province_id' => 25,
                'name' => 'Pegunungan Arfak',
                'type' => 'Kabupaten',
                'postal_code' => '98354',
            ),
            346 => 
            array (
                'id' => 347,
                'province_id' => 24,
                'name' => 'Pegunungan Bintang',
                'type' => 'Kabupaten',
                'postal_code' => '99573',
            ),
            347 => 
            array (
                'id' => 348,
                'province_id' => 10,
                'name' => 'Pekalongan',
                'type' => 'Kabupaten',
                'postal_code' => '51161',
            ),
            348 => 
            array (
                'id' => 349,
                'province_id' => 10,
                'name' => 'Pekalongan',
                'type' => 'Kota',
                'postal_code' => '51122',
            ),
            349 => 
            array (
                'id' => 350,
                'province_id' => 26,
                'name' => 'Pekanbaru',
                'type' => 'Kota',
                'postal_code' => '28112',
            ),
            350 => 
            array (
                'id' => 351,
                'province_id' => 26,
                'name' => 'Pelalawan',
                'type' => 'Kabupaten',
                'postal_code' => '28311',
            ),
            351 => 
            array (
                'id' => 352,
                'province_id' => 10,
                'name' => 'Pemalang',
                'type' => 'Kabupaten',
                'postal_code' => '52319',
            ),
            352 => 
            array (
                'id' => 353,
                'province_id' => 34,
                'name' => 'Pematang Siantar',
                'type' => 'Kota',
                'postal_code' => '21126',
            ),
            353 => 
            array (
                'id' => 354,
                'province_id' => 15,
                'name' => 'Penajam Paser Utara',
                'type' => 'Kabupaten',
                'postal_code' => '76311',
            ),
            354 => 
            array (
                'id' => 355,
                'province_id' => 18,
                'name' => 'Pesawaran',
                'type' => 'Kabupaten',
                'postal_code' => '35312',
            ),
            355 => 
            array (
                'id' => 356,
                'province_id' => 18,
                'name' => 'Pesisir Barat',
                'type' => 'Kabupaten',
                'postal_code' => '35974',
            ),
            356 => 
            array (
                'id' => 357,
                'province_id' => 32,
                'name' => 'Pesisir Selatan',
                'type' => 'Kabupaten',
                'postal_code' => '25611',
            ),
            357 => 
            array (
                'id' => 358,
                'province_id' => 21,
                'name' => 'Pidie',
                'type' => 'Kabupaten',
                'postal_code' => '24116',
            ),
            358 => 
            array (
                'id' => 359,
                'province_id' => 21,
                'name' => 'Pidie Jaya',
                'type' => 'Kabupaten',
                'postal_code' => '24186',
            ),
            359 => 
            array (
                'id' => 360,
                'province_id' => 28,
                'name' => 'Pinrang',
                'type' => 'Kabupaten',
                'postal_code' => '91251',
            ),
            360 => 
            array (
                'id' => 361,
                'province_id' => 7,
                'name' => 'Pohuwato',
                'type' => 'Kabupaten',
                'postal_code' => '96419',
            ),
            361 => 
            array (
                'id' => 362,
                'province_id' => 27,
                'name' => 'Polewali Mandar',
                'type' => 'Kabupaten',
                'postal_code' => '91311',
            ),
            362 => 
            array (
                'id' => 363,
                'province_id' => 11,
                'name' => 'Ponorogo',
                'type' => 'Kabupaten',
                'postal_code' => '63411',
            ),
            363 => 
            array (
                'id' => 364,
                'province_id' => 12,
                'name' => 'Pontianak',
                'type' => 'Kabupaten',
                'postal_code' => '78971',
            ),
            364 => 
            array (
                'id' => 365,
                'province_id' => 12,
                'name' => 'Pontianak',
                'type' => 'Kota',
                'postal_code' => '78112',
            ),
            365 => 
            array (
                'id' => 366,
                'province_id' => 29,
                'name' => 'Poso',
                'type' => 'Kabupaten',
                'postal_code' => '94615',
            ),
            366 => 
            array (
                'id' => 367,
                'province_id' => 33,
                'name' => 'Prabumulih',
                'type' => 'Kota',
                'postal_code' => '31121',
            ),
            367 => 
            array (
                'id' => 368,
                'province_id' => 18,
                'name' => 'Pringsewu',
                'type' => 'Kabupaten',
                'postal_code' => '35719',
            ),
            368 => 
            array (
                'id' => 369,
                'province_id' => 11,
                'name' => 'Probolinggo',
                'type' => 'Kabupaten',
                'postal_code' => '67282',
            ),
            369 => 
            array (
                'id' => 370,
                'province_id' => 11,
                'name' => 'Probolinggo',
                'type' => 'Kota',
                'postal_code' => '67215',
            ),
            370 => 
            array (
                'id' => 371,
                'province_id' => 14,
                'name' => 'Pulang Pisau',
                'type' => 'Kabupaten',
                'postal_code' => '74811',
            ),
            371 => 
            array (
                'id' => 372,
                'province_id' => 20,
                'name' => 'Pulau Morotai',
                'type' => 'Kabupaten',
                'postal_code' => '97771',
            ),
            372 => 
            array (
                'id' => 373,
                'province_id' => 24,
                'name' => 'Puncak',
                'type' => 'Kabupaten',
                'postal_code' => '98981',
            ),
            373 => 
            array (
                'id' => 374,
                'province_id' => 24,
                'name' => 'Puncak Jaya',
                'type' => 'Kabupaten',
                'postal_code' => '98979',
            ),
            374 => 
            array (
                'id' => 375,
                'province_id' => 10,
                'name' => 'Purbalingga',
                'type' => 'Kabupaten',
                'postal_code' => '53312',
            ),
            375 => 
            array (
                'id' => 376,
                'province_id' => 9,
                'name' => 'Purwakarta',
                'type' => 'Kabupaten',
                'postal_code' => '41119',
            ),
            376 => 
            array (
                'id' => 377,
                'province_id' => 10,
                'name' => 'Purworejo',
                'type' => 'Kabupaten',
                'postal_code' => '54111',
            ),
            377 => 
            array (
                'id' => 378,
                'province_id' => 25,
                'name' => 'Raja Ampat',
                'type' => 'Kabupaten',
                'postal_code' => '98489',
            ),
            378 => 
            array (
                'id' => 379,
                'province_id' => 4,
                'name' => 'Rejang Lebong',
                'type' => 'Kabupaten',
                'postal_code' => '39112',
            ),
            379 => 
            array (
                'id' => 380,
                'province_id' => 10,
                'name' => 'Rembang',
                'type' => 'Kabupaten',
                'postal_code' => '59219',
            ),
            380 => 
            array (
                'id' => 381,
                'province_id' => 26,
                'name' => 'Rokan Hilir',
                'type' => 'Kabupaten',
                'postal_code' => '28992',
            ),
            381 => 
            array (
                'id' => 382,
                'province_id' => 26,
                'name' => 'Rokan Hulu',
                'type' => 'Kabupaten',
                'postal_code' => '28511',
            ),
            382 => 
            array (
                'id' => 383,
                'province_id' => 23,
                'name' => 'Rote Ndao',
                'type' => 'Kabupaten',
                'postal_code' => '85982',
            ),
            383 => 
            array (
                'id' => 384,
                'province_id' => 21,
                'name' => 'Sabang',
                'type' => 'Kota',
                'postal_code' => '23512',
            ),
            384 => 
            array (
                'id' => 385,
                'province_id' => 23,
                'name' => 'Sabu Raijua',
                'type' => 'Kabupaten',
                'postal_code' => '85391',
            ),
            385 => 
            array (
                'id' => 386,
                'province_id' => 10,
                'name' => 'Salatiga',
                'type' => 'Kota',
                'postal_code' => '50711',
            ),
            386 => 
            array (
                'id' => 387,
                'province_id' => 15,
                'name' => 'Samarinda',
                'type' => 'Kota',
                'postal_code' => '75133',
            ),
            387 => 
            array (
                'id' => 388,
                'province_id' => 12,
                'name' => 'Sambas',
                'type' => 'Kabupaten',
                'postal_code' => '79453',
            ),
            388 => 
            array (
                'id' => 389,
                'province_id' => 34,
                'name' => 'Samosir',
                'type' => 'Kabupaten',
                'postal_code' => '22392',
            ),
            389 => 
            array (
                'id' => 390,
                'province_id' => 11,
                'name' => 'Sampang',
                'type' => 'Kabupaten',
                'postal_code' => '69219',
            ),
            390 => 
            array (
                'id' => 391,
                'province_id' => 12,
                'name' => 'Sanggau',
                'type' => 'Kabupaten',
                'postal_code' => '78557',
            ),
            391 => 
            array (
                'id' => 392,
                'province_id' => 24,
                'name' => 'Sarmi',
                'type' => 'Kabupaten',
                'postal_code' => '99373',
            ),
            392 => 
            array (
                'id' => 393,
                'province_id' => 8,
                'name' => 'Sarolangun',
                'type' => 'Kabupaten',
                'postal_code' => '37419',
            ),
            393 => 
            array (
                'id' => 394,
                'province_id' => 32,
                'name' => 'Sawah Lunto',
                'type' => 'Kota',
                'postal_code' => '27416',
            ),
            394 => 
            array (
                'id' => 395,
                'province_id' => 12,
                'name' => 'Sekadau',
                'type' => 'Kabupaten',
                'postal_code' => '79583',
            ),
            395 => 
            array (
                'id' => 396,
                'province_id' => 28,
            'name' => 'Selayar (Kepulauan Selayar)',
                'type' => 'Kabupaten',
                'postal_code' => '92812',
            ),
            396 => 
            array (
                'id' => 397,
                'province_id' => 4,
                'name' => 'Seluma',
                'type' => 'Kabupaten',
                'postal_code' => '38811',
            ),
            397 => 
            array (
                'id' => 398,
                'province_id' => 10,
                'name' => 'Semarang',
                'type' => 'Kabupaten',
                'postal_code' => '50511',
            ),
            398 => 
            array (
                'id' => 399,
                'province_id' => 10,
                'name' => 'Semarang',
                'type' => 'Kota',
                'postal_code' => '50135',
            ),
            399 => 
            array (
                'id' => 400,
                'province_id' => 19,
                'name' => 'Seram Bagian Barat',
                'type' => 'Kabupaten',
                'postal_code' => '97561',
            ),
            400 => 
            array (
                'id' => 401,
                'province_id' => 19,
                'name' => 'Seram Bagian Timur',
                'type' => 'Kabupaten',
                'postal_code' => '97581',
            ),
            401 => 
            array (
                'id' => 402,
                'province_id' => 3,
                'name' => 'Serang',
                'type' => 'Kabupaten',
                'postal_code' => '42182',
            ),
            402 => 
            array (
                'id' => 403,
                'province_id' => 3,
                'name' => 'Serang',
                'type' => 'Kota',
                'postal_code' => '42111',
            ),
            403 => 
            array (
                'id' => 404,
                'province_id' => 34,
                'name' => 'Serdang Bedagai',
                'type' => 'Kabupaten',
                'postal_code' => '20915',
            ),
            404 => 
            array (
                'id' => 405,
                'province_id' => 14,
                'name' => 'Seruyan',
                'type' => 'Kabupaten',
                'postal_code' => '74211',
            ),
            405 => 
            array (
                'id' => 406,
                'province_id' => 26,
                'name' => 'Siak',
                'type' => 'Kabupaten',
                'postal_code' => '28623',
            ),
            406 => 
            array (
                'id' => 407,
                'province_id' => 34,
                'name' => 'Sibolga',
                'type' => 'Kota',
                'postal_code' => '22522',
            ),
            407 => 
            array (
                'id' => 408,
                'province_id' => 28,
                'name' => 'Sidenreng Rappang/Rapang',
                'type' => 'Kabupaten',
                'postal_code' => '91613',
            ),
            408 => 
            array (
                'id' => 409,
                'province_id' => 11,
                'name' => 'Sidoarjo',
                'type' => 'Kabupaten',
                'postal_code' => '61219',
            ),
            409 => 
            array (
                'id' => 410,
                'province_id' => 29,
                'name' => 'Sigi',
                'type' => 'Kabupaten',
                'postal_code' => '94364',
            ),
            410 => 
            array (
                'id' => 411,
                'province_id' => 32,
            'name' => 'Sijunjung (Sawah Lunto Sijunjung)',
                'type' => 'Kabupaten',
                'postal_code' => '27511',
            ),
            411 => 
            array (
                'id' => 412,
                'province_id' => 23,
                'name' => 'Sikka',
                'type' => 'Kabupaten',
                'postal_code' => '86121',
            ),
            412 => 
            array (
                'id' => 413,
                'province_id' => 34,
                'name' => 'Simalungun',
                'type' => 'Kabupaten',
                'postal_code' => '21162',
            ),
            413 => 
            array (
                'id' => 414,
                'province_id' => 21,
                'name' => 'Simeulue',
                'type' => 'Kabupaten',
                'postal_code' => '23891',
            ),
            414 => 
            array (
                'id' => 415,
                'province_id' => 12,
                'name' => 'Singkawang',
                'type' => 'Kota',
                'postal_code' => '79117',
            ),
            415 => 
            array (
                'id' => 416,
                'province_id' => 28,
                'name' => 'Sinjai',
                'type' => 'Kabupaten',
                'postal_code' => '92615',
            ),
            416 => 
            array (
                'id' => 417,
                'province_id' => 12,
                'name' => 'Sintang',
                'type' => 'Kabupaten',
                'postal_code' => '78619',
            ),
            417 => 
            array (
                'id' => 418,
                'province_id' => 11,
                'name' => 'Situbondo',
                'type' => 'Kabupaten',
                'postal_code' => '68316',
            ),
            418 => 
            array (
                'id' => 419,
                'province_id' => 5,
                'name' => 'Sleman',
                'type' => 'Kabupaten',
                'postal_code' => '55513',
            ),
            419 => 
            array (
                'id' => 420,
                'province_id' => 32,
                'name' => 'Solok',
                'type' => 'Kabupaten',
                'postal_code' => '27365',
            ),
            420 => 
            array (
                'id' => 421,
                'province_id' => 32,
                'name' => 'Solok',
                'type' => 'Kota',
                'postal_code' => '27315',
            ),
            421 => 
            array (
                'id' => 422,
                'province_id' => 32,
                'name' => 'Solok Selatan',
                'type' => 'Kabupaten',
                'postal_code' => '27779',
            ),
            422 => 
            array (
                'id' => 423,
                'province_id' => 28,
                'name' => 'Soppeng',
                'type' => 'Kabupaten',
                'postal_code' => '90812',
            ),
            423 => 
            array (
                'id' => 424,
                'province_id' => 25,
                'name' => 'Sorong',
                'type' => 'Kabupaten',
                'postal_code' => '98431',
            ),
            424 => 
            array (
                'id' => 425,
                'province_id' => 25,
                'name' => 'Sorong',
                'type' => 'Kota',
                'postal_code' => '98411',
            ),
            425 => 
            array (
                'id' => 426,
                'province_id' => 25,
                'name' => 'Sorong Selatan',
                'type' => 'Kabupaten',
                'postal_code' => '98454',
            ),
            426 => 
            array (
                'id' => 427,
                'province_id' => 10,
                'name' => 'Sragen',
                'type' => 'Kabupaten',
                'postal_code' => '57211',
            ),
            427 => 
            array (
                'id' => 428,
                'province_id' => 9,
                'name' => 'Subang',
                'type' => 'Kabupaten',
                'postal_code' => '41215',
            ),
            428 => 
            array (
                'id' => 429,
                'province_id' => 21,
                'name' => 'Subulussalam',
                'type' => 'Kota',
                'postal_code' => '24882',
            ),
            429 => 
            array (
                'id' => 430,
                'province_id' => 9,
                'name' => 'Sukabumi',
                'type' => 'Kabupaten',
                'postal_code' => '43311',
            ),
            430 => 
            array (
                'id' => 431,
                'province_id' => 9,
                'name' => 'Sukabumi',
                'type' => 'Kota',
                'postal_code' => '43114',
            ),
            431 => 
            array (
                'id' => 432,
                'province_id' => 14,
                'name' => 'Sukamara',
                'type' => 'Kabupaten',
                'postal_code' => '74712',
            ),
            432 => 
            array (
                'id' => 433,
                'province_id' => 10,
                'name' => 'Sukoharjo',
                'type' => 'Kabupaten',
                'postal_code' => '57514',
            ),
            433 => 
            array (
                'id' => 434,
                'province_id' => 23,
                'name' => 'Sumba Barat',
                'type' => 'Kabupaten',
                'postal_code' => '87219',
            ),
            434 => 
            array (
                'id' => 435,
                'province_id' => 23,
                'name' => 'Sumba Barat Daya',
                'type' => 'Kabupaten',
                'postal_code' => '87453',
            ),
            435 => 
            array (
                'id' => 436,
                'province_id' => 23,
                'name' => 'Sumba Tengah',
                'type' => 'Kabupaten',
                'postal_code' => '87358',
            ),
            436 => 
            array (
                'id' => 437,
                'province_id' => 23,
                'name' => 'Sumba Timur',
                'type' => 'Kabupaten',
                'postal_code' => '87112',
            ),
            437 => 
            array (
                'id' => 438,
                'province_id' => 22,
                'name' => 'Sumbawa',
                'type' => 'Kabupaten',
                'postal_code' => '84315',
            ),
            438 => 
            array (
                'id' => 439,
                'province_id' => 22,
                'name' => 'Sumbawa Barat',
                'type' => 'Kabupaten',
                'postal_code' => '84419',
            ),
            439 => 
            array (
                'id' => 440,
                'province_id' => 9,
                'name' => 'Sumedang',
                'type' => 'Kabupaten',
                'postal_code' => '45326',
            ),
            440 => 
            array (
                'id' => 441,
                'province_id' => 11,
                'name' => 'Sumenep',
                'type' => 'Kabupaten',
                'postal_code' => '69413',
            ),
            441 => 
            array (
                'id' => 442,
                'province_id' => 8,
                'name' => 'Sungaipenuh',
                'type' => 'Kota',
                'postal_code' => '37113',
            ),
            442 => 
            array (
                'id' => 443,
                'province_id' => 24,
                'name' => 'Supiori',
                'type' => 'Kabupaten',
                'postal_code' => '98164',
            ),
            443 => 
            array (
                'id' => 444,
                'province_id' => 11,
                'name' => 'Surabaya',
                'type' => 'Kota',
                'postal_code' => '60119',
            ),
            444 => 
            array (
                'id' => 445,
                'province_id' => 10,
            'name' => 'Surakarta (Solo)',
                'type' => 'Kota',
                'postal_code' => '57113',
            ),
            445 => 
            array (
                'id' => 446,
                'province_id' => 13,
                'name' => 'Tabalong',
                'type' => 'Kabupaten',
                'postal_code' => '71513',
            ),
            446 => 
            array (
                'id' => 447,
                'province_id' => 1,
                'name' => 'Tabanan',
                'type' => 'Kabupaten',
                'postal_code' => '82119',
            ),
            447 => 
            array (
                'id' => 448,
                'province_id' => 28,
                'name' => 'Takalar',
                'type' => 'Kabupaten',
                'postal_code' => '92212',
            ),
            448 => 
            array (
                'id' => 449,
                'province_id' => 25,
                'name' => 'Tambrauw',
                'type' => 'Kabupaten',
                'postal_code' => '98475',
            ),
            449 => 
            array (
                'id' => 450,
                'province_id' => 16,
                'name' => 'Tana Tidung',
                'type' => 'Kabupaten',
                'postal_code' => '77611',
            ),
            450 => 
            array (
                'id' => 451,
                'province_id' => 28,
                'name' => 'Tana Toraja',
                'type' => 'Kabupaten',
                'postal_code' => '91819',
            ),
            451 => 
            array (
                'id' => 452,
                'province_id' => 13,
                'name' => 'Tanah Bumbu',
                'type' => 'Kabupaten',
                'postal_code' => '72211',
            ),
            452 => 
            array (
                'id' => 453,
                'province_id' => 32,
                'name' => 'Tanah Datar',
                'type' => 'Kabupaten',
                'postal_code' => '27211',
            ),
            453 => 
            array (
                'id' => 454,
                'province_id' => 13,
                'name' => 'Tanah Laut',
                'type' => 'Kabupaten',
                'postal_code' => '70811',
            ),
            454 => 
            array (
                'id' => 455,
                'province_id' => 3,
                'name' => 'Tangerang',
                'type' => 'Kabupaten',
                'postal_code' => '15914',
            ),
            455 => 
            array (
                'id' => 456,
                'province_id' => 3,
                'name' => 'Tangerang',
                'type' => 'Kota',
                'postal_code' => '15111',
            ),
            456 => 
            array (
                'id' => 457,
                'province_id' => 3,
                'name' => 'Tangerang Selatan',
                'type' => 'Kota',
                'postal_code' => '15332',
            ),
            457 => 
            array (
                'id' => 458,
                'province_id' => 18,
                'name' => 'Tanggamus',
                'type' => 'Kabupaten',
                'postal_code' => '35619',
            ),
            458 => 
            array (
                'id' => 459,
                'province_id' => 34,
                'name' => 'Tanjung Balai',
                'type' => 'Kota',
                'postal_code' => '21321',
            ),
            459 => 
            array (
                'id' => 460,
                'province_id' => 8,
                'name' => 'Tanjung Jabung Barat',
                'type' => 'Kabupaten',
                'postal_code' => '36513',
            ),
            460 => 
            array (
                'id' => 461,
                'province_id' => 8,
                'name' => 'Tanjung Jabung Timur',
                'type' => 'Kabupaten',
                'postal_code' => '36719',
            ),
            461 => 
            array (
                'id' => 462,
                'province_id' => 17,
                'name' => 'Tanjung Pinang',
                'type' => 'Kota',
                'postal_code' => '29111',
            ),
            462 => 
            array (
                'id' => 463,
                'province_id' => 34,
                'name' => 'Tapanuli Selatan',
                'type' => 'Kabupaten',
                'postal_code' => '22742',
            ),
            463 => 
            array (
                'id' => 464,
                'province_id' => 34,
                'name' => 'Tapanuli Tengah',
                'type' => 'Kabupaten',
                'postal_code' => '22611',
            ),
            464 => 
            array (
                'id' => 465,
                'province_id' => 34,
                'name' => 'Tapanuli Utara',
                'type' => 'Kabupaten',
                'postal_code' => '22414',
            ),
            465 => 
            array (
                'id' => 466,
                'province_id' => 13,
                'name' => 'Tapin',
                'type' => 'Kabupaten',
                'postal_code' => '71119',
            ),
            466 => 
            array (
                'id' => 467,
                'province_id' => 16,
                'name' => 'Tarakan',
                'type' => 'Kota',
                'postal_code' => '77114',
            ),
            467 => 
            array (
                'id' => 468,
                'province_id' => 9,
                'name' => 'Tasikmalaya',
                'type' => 'Kabupaten',
                'postal_code' => '46411',
            ),
            468 => 
            array (
                'id' => 469,
                'province_id' => 9,
                'name' => 'Tasikmalaya',
                'type' => 'Kota',
                'postal_code' => '46116',
            ),
            469 => 
            array (
                'id' => 470,
                'province_id' => 34,
                'name' => 'Tebing Tinggi',
                'type' => 'Kota',
                'postal_code' => '20632',
            ),
            470 => 
            array (
                'id' => 471,
                'province_id' => 8,
                'name' => 'Tebo',
                'type' => 'Kabupaten',
                'postal_code' => '37519',
            ),
            471 => 
            array (
                'id' => 472,
                'province_id' => 10,
                'name' => 'Tegal',
                'type' => 'Kabupaten',
                'postal_code' => '52419',
            ),
            472 => 
            array (
                'id' => 473,
                'province_id' => 10,
                'name' => 'Tegal',
                'type' => 'Kota',
                'postal_code' => '52114',
            ),
            473 => 
            array (
                'id' => 474,
                'province_id' => 25,
                'name' => 'Teluk Bintuni',
                'type' => 'Kabupaten',
                'postal_code' => '98551',
            ),
            474 => 
            array (
                'id' => 475,
                'province_id' => 25,
                'name' => 'Teluk Wondama',
                'type' => 'Kabupaten',
                'postal_code' => '98591',
            ),
            475 => 
            array (
                'id' => 476,
                'province_id' => 10,
                'name' => 'Temanggung',
                'type' => 'Kabupaten',
                'postal_code' => '56212',
            ),
            476 => 
            array (
                'id' => 477,
                'province_id' => 20,
                'name' => 'Ternate',
                'type' => 'Kota',
                'postal_code' => '97714',
            ),
            477 => 
            array (
                'id' => 478,
                'province_id' => 20,
                'name' => 'Tidore Kepulauan',
                'type' => 'Kota',
                'postal_code' => '97815',
            ),
            478 => 
            array (
                'id' => 479,
                'province_id' => 23,
                'name' => 'Timor Tengah Selatan',
                'type' => 'Kabupaten',
                'postal_code' => '85562',
            ),
            479 => 
            array (
                'id' => 480,
                'province_id' => 23,
                'name' => 'Timor Tengah Utara',
                'type' => 'Kabupaten',
                'postal_code' => '85612',
            ),
            480 => 
            array (
                'id' => 481,
                'province_id' => 34,
                'name' => 'Toba Samosir',
                'type' => 'Kabupaten',
                'postal_code' => '22316',
            ),
            481 => 
            array (
                'id' => 482,
                'province_id' => 29,
                'name' => 'Tojo Una-Una',
                'type' => 'Kabupaten',
                'postal_code' => '94683',
            ),
            482 => 
            array (
                'id' => 483,
                'province_id' => 29,
                'name' => 'Toli-Toli',
                'type' => 'Kabupaten',
                'postal_code' => '94542',
            ),
            483 => 
            array (
                'id' => 484,
                'province_id' => 24,
                'name' => 'Tolikara',
                'type' => 'Kabupaten',
                'postal_code' => '99411',
            ),
            484 => 
            array (
                'id' => 485,
                'province_id' => 31,
                'name' => 'Tomohon',
                'type' => 'Kota',
                'postal_code' => '95416',
            ),
            485 => 
            array (
                'id' => 486,
                'province_id' => 28,
                'name' => 'Toraja Utara',
                'type' => 'Kabupaten',
                'postal_code' => '91831',
            ),
            486 => 
            array (
                'id' => 487,
                'province_id' => 11,
                'name' => 'Trenggalek',
                'type' => 'Kabupaten',
                'postal_code' => '66312',
            ),
            487 => 
            array (
                'id' => 488,
                'province_id' => 19,
                'name' => 'Tual',
                'type' => 'Kota',
                'postal_code' => '97612',
            ),
            488 => 
            array (
                'id' => 489,
                'province_id' => 11,
                'name' => 'Tuban',
                'type' => 'Kabupaten',
                'postal_code' => '62319',
            ),
            489 => 
            array (
                'id' => 490,
                'province_id' => 18,
                'name' => 'Tulang Bawang',
                'type' => 'Kabupaten',
                'postal_code' => '34613',
            ),
            490 => 
            array (
                'id' => 491,
                'province_id' => 18,
                'name' => 'Tulang Bawang Barat',
                'type' => 'Kabupaten',
                'postal_code' => '34419',
            ),
            491 => 
            array (
                'id' => 492,
                'province_id' => 11,
                'name' => 'Tulungagung',
                'type' => 'Kabupaten',
                'postal_code' => '66212',
            ),
            492 => 
            array (
                'id' => 493,
                'province_id' => 28,
                'name' => 'Wajo',
                'type' => 'Kabupaten',
                'postal_code' => '90911',
            ),
            493 => 
            array (
                'id' => 494,
                'province_id' => 30,
                'name' => 'Wakatobi',
                'type' => 'Kabupaten',
                'postal_code' => '93791',
            ),
            494 => 
            array (
                'id' => 495,
                'province_id' => 24,
                'name' => 'Waropen',
                'type' => 'Kabupaten',
                'postal_code' => '98269',
            ),
            495 => 
            array (
                'id' => 496,
                'province_id' => 18,
                'name' => 'Way Kanan',
                'type' => 'Kabupaten',
                'postal_code' => '34711',
            ),
            496 => 
            array (
                'id' => 497,
                'province_id' => 10,
                'name' => 'Wonogiri',
                'type' => 'Kabupaten',
                'postal_code' => '57619',
            ),
            497 => 
            array (
                'id' => 498,
                'province_id' => 10,
                'name' => 'Wonosobo',
                'type' => 'Kabupaten',
                'postal_code' => '56311',
            ),
            498 => 
            array (
                'id' => 499,
                'province_id' => 24,
                'name' => 'Yahukimo',
                'type' => 'Kabupaten',
                'postal_code' => '99041',
            ),
            499 => 
            array (
                'id' => 500,
                'province_id' => 24,
                'name' => 'Yalimo',
                'type' => 'Kabupaten',
                'postal_code' => '99481',
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 501,
                'province_id' => 5,
                'name' => 'Yogyakarta',
                'type' => 'Kota',
                'postal_code' => '55111',
            ),
        ));
        
        
    }
}