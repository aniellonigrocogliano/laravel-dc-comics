<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Coomic;

class CoomicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        $coomicsData = config("comics");
        foreach ($coomicsData as $coomicData) {
            $newCoomic = new Coomic();

            $newCoomic->fill($coomicData);
            $newCoomic->save();
        }
    }
}
