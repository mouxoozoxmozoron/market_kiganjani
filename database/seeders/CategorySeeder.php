<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['id' => 1, 'category' => 'Health & Beauty'],
            ['id' => 2, 'category' => 'Real estate'],
            ['id' => 3, 'category' => 'Jobs'],
            ['id' => 4, 'category' => 'Kids'],
            ['id' => 5, 'category' => 'Women’s Fashion'],
            ['id' => 6, 'category' => 'Men’s Fashion'],
            ['id' => 7, 'category' => 'Multimedia'],
            ['id' => 8, 'category' => 'Vehicles'],
            ['id' => 9, 'category' => 'Home furniture'],
            ['id' => 10, 'category' => 'Construction'],
            ['id' => 11, 'category' => 'School utilis'],
            ['id' => 12, 'category' => 'Environment'],
            ['id' => 13, 'category' => 'Other'],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(
                ['id' => $category['id']],
                ['category' => $category['category']]
            );
        }
    }
}

//php artisan db:seed
