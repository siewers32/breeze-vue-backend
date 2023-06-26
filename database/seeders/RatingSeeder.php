<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\User;
use App\Models\Rating;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $movies = Movie::all();
        $users = User::all();
        foreach($movies as $movie) {
            foreach($users as $user) {
                $rating = new Rating();
                $rating->user_id = $user->id;
                $rating->movie_id = $movie->id;
                $rating->rating = random_int(0,5);
                $rating->save();
            }
        }        
    }
}
