<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movie = new \App\Models\Movie([
            'poster'=> 'https://capitalstimes.com/wp-content/uploads/2021/02/Untitled-1-copy-1-1.jpg',
            'title'=> 'thor',
            'description' => 'Action movie',
            'releasedate'=>'2022/01/01',
            'created_by'=>'1',
            'updated_by'=>'1'

        ]);
        $movie->save();
        $movie = new \App\Models\Movie([
            'poster'=> 'https://capitalstimes.com/wp-content/uploads/2021/02/Untitled-1-copy-1-1.jpg',
            'title'=> 'Ragnarok',
            'description' => 'Action movie',
            'releasedate'=>'2022/01/02',
            'created_by'=>'2',
            'updated_by'=>'2'

        ]);
        $movie->save();
        $movie = new \App\Models\Movie([
            'poster'=> 'https://capitalstimes.com/wp-content/uploads/2021/02/Untitled-1-copy-1-1.jpg',
            'title'=> 'Kabaddi kabaddi',
            'description' => 'Action movie',
            'releasedate'=>'2022/01/03',
            'created_by'=>'3',
            'updated_by'=>'3'

        ]);
        $movie->save();
        $movie = new \App\Models\Movie([
            'poster'=> 'https://capitalstimes.com/wp-content/uploads/2021/02/Untitled-1-copy-1-1.jpg',
            'title'=> 'Avenger infinity war',
            'description' => 'Action movie',
            'releasedate'=>'2022/01/04',
            'created_by'=>'4',
            'updated_by'=>'4'

        ]);
        $movie->save();
    }
}
