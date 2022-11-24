<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =[
            ['first_name'=>'Helal','last_name'=>'Hussain','email'=>'helal@gmail.com',
            'password'=>Hash::make(12345),'gender'=>'Male','dob'=>'2022-12-02'],
            ['first_name'=>'New','last_name'=>'User','email'=>'newuser@gmail.com',
            'password'=>Hash::make(12345),'gender'=>'Male','dob'=>'2022-12-02'],
            ['first_name'=>'Afsana','last_name'=>'Rimu','email'=>'afsana@gmail.com',
            'password'=>Hash::make(12345),'gender'=>'Female','dob'=>'2022-12-02'],
        ];
        User::insert($users);
        
    }
}
