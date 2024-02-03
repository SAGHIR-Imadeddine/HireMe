<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Category::create([
            'name' => 'Plumbing',
            'description' => 'Heating and cooling (HVAC), waste removal, and potable water delivery'
        ]);
        Category::create([
            'name' => 'Gardening',
            'description' => 'growing and cultivating plants as part of horticulture.'
        ]);
        Category::create([
            'name' => 'Painting',
            'description' => 'The support for paintings includes such surfaces as walls, paper, canvas, wood, glass, lacquer, pottery, leaf, copper and concrete, and the painting may incorporate multiple other materials'
        ]);
        Category::create([
            'name' => 'IT',
            'description' => 'Front-end, Back-end. No matter what it is you will find it here'
        ]);
        Category::create([
            'name' => 'Design',
            'description' => 'Just choose the idea, and we will help you see it'
        ]);
        Category::create([
            'name' => 'Other',
            'description' => 'other services'
        ]);
    }
}
