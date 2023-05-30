<?php

namespace Database\Seeders;
use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics'); 
        foreach ($comics as $comic) {
            $newcomic = new Comic();
            $newcomic->title = $comic['title'];
            $newcomic->thumb = $comic['thumb'];
            $newcomic->description = $comic['description'];
            $newcomic->price = $comic['price'];
            $newcomic->type = $comic['type'];
            $newcomic->sale_date = $comic['sale_date'];
            $newcomic->series = $comic['series'];
            $newcomic->save();
        }
    }
}
