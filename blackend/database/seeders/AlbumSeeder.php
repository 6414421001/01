<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('album')->insert([
            ['album_name'=>'HolyFox',
             'album_pdf'=>'https://www.phonorights.com/images/img-news/1631856984/IMG_NEWS_01.jpg',
             'person_name'=>'HolyFox',
             'song_date' => '2020-02-01',
            
            ],
            ['album_name'=>'GMM GRAMMY',
            'album_pdf'=>'https://contents.bu.ac.th/contents/images/mous/81152e05-57b9-45ca-bece-0a3d1a992f55.jpg',
            'person_name'=>'GMM GRAMMY',
            'song_date' => '2020-02-01',
           
           ],
           
        ]);
    }
}
