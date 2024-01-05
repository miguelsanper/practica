<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'CURSOS',
            'image' => 'https://dummtimage.com/200x150/5c5756/fff'
        ]);
        Category::create([
            'name' => 'TENIS',
            'image' => 'https://dummtimage.com/200x150/5c5756/fff'
        ]);
        Category::create([
            'name' => 'CELULARES',
            'image' => 'https://dummtimage.com/200x150/5c5756/fff'
        ]);
        Category::create([
            'name' => 'COMPUTADORAS',
            'image' => 'https://dummtimage.com/200x150/5c5756/fff'
        ]);
    }
}
