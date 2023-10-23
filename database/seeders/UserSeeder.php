<?php

namespace Database\Seeders;

use App\Models\Doctors;
use App\Models\Patients;
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
        $user = User::create([
            'username' => 'admin',
            'type' => 'admin',
            'password' => password_hash('777', PASSWORD_DEFAULT),
        ]);


        
    }
}
