<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->insert([
           [
               'movie_id' => 1,
               'episode' => 1,
               'title' => 'Introduction To War',
           ],
            [
                'movie_id' => 1,
                'episode' => 2,
                'title' => 'More Advanced To War',
            ],
            [
                'movie_id' => 1,
                'episode' => 3,
                'title' => 'Most Advanced WAR, END!',
            ],
            [
                'movie_id' => 1,
                'episode' => 4,
                'title' => 'Final one to WAR, Avengers',
            ],
            [
                'movie_id' => 4,
                'episode' => 1,
                'title' => 'Making the Startup',
            ],
            [
                'movie_id' => 4,
                'episode' => 2,
                'title' => 'Failed several times',
            ],
            [
                'movie_id' => 4,
                'episode' => 3,
                'title' => "I'm Success now",
            ],
            [
                'movie_id' => 4,
                'episode' => 3,
                'title' => "I'm Success now part 2",
            ],
            [
                'movie_id' => 7,
                'episode' => 1,
                'title' => 'Introduction to comedy',
            ],
            [
                'movie_id' => 7,
                'episode' => 2,
                'title' => 'Comedy is so fun',
            ],
            [
                'movie_id' => 7,
                'episode' => 3,
                'title' => 'Final Stage of Comedy',
            ],
        ]);
    }
}
