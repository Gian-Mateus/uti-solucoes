<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ClientSeeder;
use Database\Seeders\ClientUserSeeder;
use Database\Seeders\DataClientSeeder;
use Database\Seeders\SystemUserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DataClientSeeder::class,
            ClientSeeder::class,
            ClientUserSeeder::class,
            SystemUserSeeder::class,
        ]);
    }

    
}
