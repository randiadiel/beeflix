<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'genre_id' => 2,
                'title' => 'Avengers: End Game Eps',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_UX182_CR0,0,182,268_AL_.jpg',
                'description' => "After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos' actions and restore balance to the universe.",
                'rating' => 4,
            ],
            [
                'genre_id' => 2,
                'title' => 'Over the Moon',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BZjNkYjIzOTYtZTE3Mi00MzIyLWExZTItMzc0YWEyNjNiNzBhXkEyXkFqcGdeQXVyMTE1MTYxNDAw._V1_FMjpg_UX810_.jpg',
                'description' => "In this animated musical, a girl builds a rocket ship and blasts off, hoping to meet a mythical moon goddess.",
                'rating' => 4,
            ],
            [
                'genre_id' => 2,
                'title' => 'Coco',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BYjQ5NjM0Y2YtNjZkNC00ZDhkLWJjMWItN2QyNzFkMDE3ZjAxXkEyXkFqcGdeQXVyODIxMzk5NjA@._V1_FMjpg_UY895_.jpg',
                'description' => "Aspiring musician Miguel, confronted with his family's ancestral ban on music, enters the Land of the Dead to find his great-great-grandfather, a legendary singer.",
                'rating' => 5,
            ],
            [
                'genre_id' => 1,
                'title' => 'Start Up',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BZGEzMjMxNmItYWM2MC00MGU3LTk2YmQtYjUyOTVjYTRlZDQ3XkEyXkFqcGdeQXVyNDU4MDQ0MjM@._V1_UY268_CR2,0,182,268_AL_.jpg',
                'description' => "Young entrepreneurs aspiring to launch virtual dreams into reality compete for success and love in the cutthroat world of Korea's high-tech industry.",
                'rating' => 5,
            ],
            [
                'genre_id' => 1,
                'title' => 'Miracle in Cell No. 7',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BZGFkYzhmOWEtZTlkYi00ZTVkLWI5ZmQtY2IxOTkxMGU4ZWFmXkEyXkFqcGdeQXVyNjg5MjgxODQ@._V1_FMjpg_UX900_.jpg',
                'description' => "A story about the love between a mentally-ill father and his lovingly adorable daughter.",
                'rating' => 4,
            ],
            [
                'genre_id' => 1,
                'title' => 'Do Do Sol Sol La La Sol',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BYjllNDU2MDAtNzlhNi00Mjg2LWE1NTUtMDAzY2VlMWE5YjgxXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_FMjpg_UX426_.jpg',
                'description' => "A riches-to-rags pianist who loses everything but her smile is guided by twinkling little stars to a small town where she finds hope, home and love.",
                'rating' => 5,
            ],
            [
                'genre_id' => 3,
                'title' => 'Mr. Bean',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BOGNjZTRlNDctNGI0Yi00YmFkLTljMmQtMjQ1ZjdiNmU5YTc0XkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_UY268_CR0,0,182,268_AL_.jpg',
                'description' => "Bumbling, childlike Mr. Bean has trouble completing the simplest of tasks in day-to-day life, but his perseverance and resourcefulness frequently allow him to find ingenious ways around problems.",
                'rating' => 3,
            ],
            ['genre_id'=>1,
                'title' => 'Cek Toko Sebelah',
                'photo' => 'https://upload.wikimedia.org/wikipedia/id/2/20/Cek_Toko_Sebelah.jpg',
                'description' => 'Ide cerita film ini dibuat berdasarkan pada realitas etnis Tionghoa saat anak beranjak dewasa, kuliah yang tinggi, mirisnya ujung-ujungnya bekerja di toko orang tuanya sendiri.',
                'rating' => 5
            ],


            ['genre_id'=>1,
                'title' => 'Joker',
                'photo' => 'https://images-na.ssl-images-amazon.com/images/I/71H4EDEfcwL._AC_SL1500_.jpg',
                'description' => 'Joker adalah film cerita seru psikologis Amerika Serikat tahun 2019 yang disutradarai oleh Todd Phillips dan diproduseri oleh Todd Philips, Bradley Cooper, dan Emma Tillinger Koskoff. ',
                'rating' => 5
            ],

            ['genre_id'=>1,
                'title' => 'Snowden',
                'photo' => 'https://upload.wikimedia.org/wikipedia/en/c/ca/Snowden_film_poster.jpg',
                'description' => 'Snowden adalah film thriller biografi politik Amerika Serikat tahun 2016 yang disutradarai Oliver Stone dan diproduseri oleh Moritz Borman, Eric Kopeloff, Philip Schulz-Deyle dan Fernando Sulichin.',
                'rating' => 4
            ],

        ]);
    }
}
