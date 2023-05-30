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
        $comics = config('comics.php'); 
        foreach ($comics as $comic) {
            $newcomic = new Comic();
            $newcomic->name = $comic['name'];
            $newcomic->thumb = $comic['thumb'];
            $newcomic->description = $comic['description'];
            $newcomic->price = $comic['price'];
            $newcomic->type = $comic['type'];
            $newcomic->release_date = $comic['release_date'];
            $newcomic->series = $comic['series'];
            $newcomic->save();
        }
    }
}
