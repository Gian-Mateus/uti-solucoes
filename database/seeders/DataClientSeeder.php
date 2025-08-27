<?php

namespace Database\Seeders;

use App\Models\DataClient;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataClient::factory(10)->create();
    }
}
