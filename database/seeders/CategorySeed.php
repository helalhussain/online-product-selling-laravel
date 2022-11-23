<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories =[
            ['category_title'=>'Mobile','description'=>'New category'],
            ['category_title'=>'Electronics','description'=>'New category'],
            ['category_title'=>'Vehicle','description'=>'New category'],
            ['category_title'=>'Property','description'=>'New category'],
            ['category_title'=>'Pets & Animals','description'=>'New category'],
            ['category_title'=>'Hobbies & Sports','description'=>'New category'],
            ['category_title'=>'Fashion & Beauty','description'=>'New category'],
            ['category_title'=>'Home & Living','description'=>'City'],
        ];
        Category::insert($categories);
    }
}
