<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Configurasi;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => \Hash::make('CODINGRAFI250505')
        ]);  

        Configurasi::create([
            'key' => 'about',
            'value' => ''
        ]);
        Configurasi::create([
            'key' => 'facebook',
            'value' => ''
        ]);
        Configurasi::create([
            'key' => 'instagram',
            'value' => ''
        ]);
        Configurasi::create([
            'key' => 'linkedin',
            'value' => ''
        ]);
        Configurasi::create([
            'key' => 'github',
            'value' => ''
        ]);
        Configurasi::create([
            'key' => 'twitter',
            'value' => ''
        ]);
        Configurasi::create([
            'key' => 'youtube',
            'value' => ''
        ]);
        Configurasi::create([
            'key' => 'cv',
            'value' => ''
        ]);


        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
