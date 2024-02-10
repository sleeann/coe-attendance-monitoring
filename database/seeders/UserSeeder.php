<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin',
            'parent_name'=> '',
            'address'=> '',
            'sex'=> '',
            'contact_number'=> '',
            'date_of_birth'=> '',
            'year'=> '',
            'block'=> '',
            'course'=> '',
            'password' => Hash::make('admin')
        ])->assignRole('Administrator');

        User::create([
            'name' => 'JOE',
            'email' => '00-UR-0000',
            'parent_name'=> '',
            'address'=> '',
            'sex'=> '',
            'contact_number'=> '',
            'date_of_birth'=> '',
            'year'=> '',
            'block'=> '',
            'course'=> '',
            'password' => Hash::make('joejoejoe')
        ])->assignRole('Instructor');

        User::create([
            'name' => 'JUAN DELA PAZ',
            'email' => '24-UR-0001',
            'parent_name'=> 'JUANiTA DELA PAZ',
            'address'=> 'urdaneta',
            'sex'=> 'male',
            'contact_number'=> '09876543210',
            'date_of_birth'=> '08/28/2001',
            'year'=> '4',
            'block'=> 'A',
            'course'=> 'wala',
            'password' => Hash::make('joejoejoe')
        ])->assignRole('Parent');

        User::create([
            'name' => 'JOSE RIZAL',
            'email' => '24-UR-0002',
            'parent_name'=> 'JUANiTA RIZAL',
            'address'=> 'urdaneta',
            'sex'=> 'male',
            'contact_number'=> '09876543210',
            'date_of_birth'=> '08/28/2001',
            'year'=> '4',
            'block'=> 'A',
            'course'=> 'wala',
            'password' => Hash::make('joejoejoe')
        ])->assignRole('Parent');
    }
}
