<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = new User();

        $user1->name = 'Test Admin';
        $user1->email = 'test@test.com';
        $user1->password = bcrypt('lamisma1');

        $user1->save();
        $user1->assignRole('Admin');
    }
}
