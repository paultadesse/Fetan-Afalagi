<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Company']);
        Category::create(['name' => 'Product']);
        Category::create(['name' => 'Service']);
        Category::create(['name' => 'City']);
        Category::create(['name' => 'Area']);
    }
}
