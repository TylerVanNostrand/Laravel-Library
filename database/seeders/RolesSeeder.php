<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Roles::factory(1)->createMany([
            ['title' => 'Admin'],
            ['title' => 'Librarian'],
            ['title' => 'Cardholder']
        ]);
    }
}