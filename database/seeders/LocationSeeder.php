<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            ['id' => 1, 'name' => 'Arusha'],
            ['id' => 2, 'name' => 'Dar es salaam'],
            ['id' => 3, 'name' => 'Dodom'],
            ['id' => 4, 'name' => 'Geita'],
            ['id' => 5, 'name' => 'Iringa'],
            ['id' => 6, 'name' => 'Kagera'],
            ['id' => 7, 'name' => 'Katavi'],
            ['id' => 8, 'name' => 'Kigoma'],
            ['id' => 9, 'name' => 'Kilimanjaro'],
            ['id' => 10, 'name' => 'Lindi'],
            ['id' => 11, 'name' => 'Manyara'],
            ['id' => 12, 'name' => 'Mara'],
            ['id' => 14, 'name' => 'Mbeya'],
            ['id' => 15, 'name' => 'Mjini magharibi'],
            ['id' => 16, 'name' => 'MOrogoro'],
            ['id' => 17, 'name' => 'Mtwara'],
            ['id' => 18, 'name' => 'Mwanza'],
            ['id' => 19, 'name' => 'Njombe'],
            ['id' => 20, 'name' => 'Pemba north'],
            ['id' => 21, 'name' => 'Pemba south'],
            ['id' => 22, 'name' => 'Pwani'],
            ['id' => 23, 'name' => 'Rukwa'],
            ['id' => 24, 'name' => 'Ruvuma'],
            ['id' => 25, 'name' => 'Shinyanga'],
            ['id' => 26, 'name' => 'Simiyu'],
            ['id' => 27, 'name' => 'Singida'],
            ['id' => 28, 'name' => 'Songwe'],
            ['id' => 29, 'name' => 'Tabora'],
            ['id' => 30, 'name' => 'Tanga'],
            ['id' => 31, 'name' => 'Unguja north'],
            ['id' => 32, 'name' => 'Unguja south'],
        ];

        foreach ($locations as $location) {
            Location::firstOrCreate(
                ['id' => $location['id']],
                ['name' => $location['name']]
            );
        }
    }
}
