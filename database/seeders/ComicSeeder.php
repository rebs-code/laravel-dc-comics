<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //save database in variable
        $comics = config('comic_db');

        //loop through comics
        foreach ($comics as $comic_item) {

            //create new comic
            $comic = new Comic();
            //assign comic properties
            $comic->title = $comic_item['title'];
            $comic->description = $comic_item['description'];
            $comic->thumb = $comic_item['thumb'];
            $comic->price = $comic_item['price'];
            $comic->series = $comic_item['series'];
            $comic->sale_date = $comic_item['sale_date'];
            $comic->type = $comic_item['type'];
            $comic->artists = $comic_item['artists'];
            $comic->writers = $comic_item['writers'];
            //save comic
            $comic->save();
        }
    }
}
