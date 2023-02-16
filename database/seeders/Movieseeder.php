<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\Tag;

class Movieseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::factory()->count(100)->make()->each(function ($p) {

            // realazione con genre: con la Foreign Key
            $genre = Genre::inRandomOrder()->first();
            $p->genre()->associate($genre);

            $p->save();

            // relazione con tag: Molti a molti
            $tags = Tag::inRandomOrder()->limit(rand(1, 5))->get();
            $p->tags()->attach($tags);
        });
    }
}