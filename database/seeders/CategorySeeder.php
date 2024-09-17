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
        Category::create([
            'name' => 'Buku Politik',
            'slug' => 'buku-politik',
            'color' => 'red',
        ]);
        Category::create([
            'name' => 'Buku Pengetahuan',
            'slug' => 'buku-pengetahuan',
            'color' => 'green',
        ]);
        Category::create([
            'name' => 'Novel',
            'slug' => 'novel-bacaan',
            'color' => 'blue',
        ]);
        Category::create([
            'name' => 'Buku Komik',
            'slug' => 'buku-komik',
            'color' => 'yellow',
        ]);
        Category::create([
            'name' => 'Buku Masak',
            'slug' => 'buku-masak',
            'color' => 'orange',
        ]);
    }
}
