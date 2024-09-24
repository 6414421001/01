<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mu')->insert([
            ['album_name'=>'GMM GRAMMY',
             'music_name'=>'รักเอ๋ย',
             'camp_name'=>'u7yCirQaWTs',
             'person_date' => '2020-02-01',
            
            ],
            ['album_name'=>'GMM GRAMMY',
            'music_name'=>'ใครใครก็ไม่รักผม ',
            'camp_name'=>'5P9xyo6yLM8',
            'person_date' => '2020-02-01',
           
           ],
           ['album_name'=>'HolyFox',
           'music_name'=>'WANYAi',
           'camp_name'=>'HY-UVUnDtDQ',
           'person_date' => '2020-02-01',
          
          ],
          ['album_name'=>'HolyFox',
          'album_pdf'=>'จดจำ',
          'camp_name'=>'XJRkTyvoL4k',
          'person_date' => '2020-02-01',
         
         ],
       
           ]);
    }
}
