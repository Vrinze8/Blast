<?php
use App\Film;
use Illuminate\Database\Seeder;

class FilmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $film = new Film();

        $film->title = "Siri ya Mtungi";
        $film->producer = "MFDI";
        $film->sponsor = "USAID, JHU•CCP";
        $film->city = "Dar es Salaam";
        $film->theme = "Drama";
        $film->year = "2012";
        $film->price = "Unknown";

        $film->save();

    }
}
