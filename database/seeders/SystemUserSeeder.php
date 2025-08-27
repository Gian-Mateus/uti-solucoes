<?php

namespace Database\Seeders;

use App\Models\SystemUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SystemUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SystemUser::create([
            'name' => 'Gian Mateus',
            'login' => 'gian.mateus',
            'email' => 'gian.m.silver@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        SystemUser::create([
            'name' => 'Jean Ramires',
            'login' => 'jean.ramires',
            'email' => 'jean.ramires@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        SystemUser::create([
            'name' => 'Eduardo Arend',
            'login' => 'eduardo.arend',
            'email' => 'eduardo.arend@outlook.com',
            'password' => Hash::make('123456'),
        ]);

        SystemUser::create([
            'name' => 'José Zunino',
            'login' => 'jose.zunino',
            'email' => 'jose@utisolucoes.com.br',
            'password' => Hash::make('123456'),
        ]);
    }
}
