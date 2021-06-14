<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::insert("INSERT INTO provinces (id, name) VALUES
        (1, Bali),
        (2, BangkaBelitung),
        (3, Banten),
        (4, Bengkulu),
        (5, DIYogyakarta),
        (6, DKIJakarta),
        (7, Gorontalo),
        (8, Jambi),
        (9, JawaBarat),
        (10, JawaTengah),
        (11, JawaTimur),
        (12, KalimantanBarat),
        (13, KalimantanSelatan),
        (14, KalimantanTengah),
        (15, KalimantanTimur),
        (16, KalimantanUtara),
        (17, KepulauanRiau),
        (18, Lampung),
        (19, Maluku),
        (20, MalukuUtara),
        (21, NanggroeAcehDarussalam(NAD)),
        (22, NusaTenggaraBarat(NTB)),
        (23, NusaTenggaraTimur(NTT)),
        (24, Papua),
        (25, PapuaBarat),
        (26, Riau),
        (27, SulawesiBarat),
        (28, SulawesiSelatan),
        (29, SulawesiTengah),
        (30, SulawesiTenggara),
        (31, SulawesiUtara),
        (32, SumateraBarat),
        (33, SumateraSelatan),
        (34, SumateraUtara);");
    }
}
