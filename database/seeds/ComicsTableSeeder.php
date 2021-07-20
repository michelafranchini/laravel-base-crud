<?php

use Illuminate\Database\Seeder;
use App\Comic; 

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayComics = config('comic'); 

        foreach ($arrayComics as $item) {
            $comic = new Comic(); 

            $comic->title = $item['title']; 
            $comic->description = $item['description'];
            $comic->thumb = $item['thumb'];
            $comic->price = $item['price'];
            $comic->series = $item['series'];
            $comic->sale_date = $item['sale_date'];
            $comic->type = $item['type'];
            
            $comic->save(); 
        }
    }
}
