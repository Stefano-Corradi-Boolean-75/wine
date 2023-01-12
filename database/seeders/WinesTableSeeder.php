<?php

namespace Database\Seeders;

use App\Models\Wine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = file_get_contents('https://api.sampleapis.com/wines/reds');
		$data = json_decode($data);

        foreach ($data as $value) {
            $new_wine = new Wine();
            $new_wine->nome = $value->wine;
            $new_wine->cantina = $value->winery;
            $new_wine->rating = $value->rating->average;
            $new_wine->location = $value->location;
            $new_wine->image = $value->image;
            $new_wine->save();
        }
    }
}
