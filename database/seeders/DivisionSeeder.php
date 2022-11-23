<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Division;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $divisions =[
            ['division_title'=>'Dhaka','description'=>'City'],
            ['division_title'=>'Chattogram','description'=>'City'],
            ['division_title'=>'Sylhet','description'=>'City'],
            ['division_title'=>'Khulna','description'=>'City'],
            ['division_title'=>'Borishal','description'=>'City'],
            ['division_title'=>'Rangpur','description'=>'City'],
            ['division_title'=>'Rajshahi','description'=>'City'],
            ['division_title'=>'Mymenshingh','description'=>'City'],
            ['division_title'=>'Comilla','description'=>'City'],
        ];
        Division::insert($divisions);
    }
}
