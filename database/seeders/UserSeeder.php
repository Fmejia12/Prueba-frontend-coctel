<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'name' => 'NESTOR FABIAN MEJIA REYES',
            'email' => 'nesfab2007@gmail.com',
            'password' => bcrypt('1075219244')
        ]);

        User::factory(9)->create();
    }
}
