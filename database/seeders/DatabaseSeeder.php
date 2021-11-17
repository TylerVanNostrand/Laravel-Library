<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        \App\Models\Publisher::factory(1)->create();
        $this->call(AuthorSeeder::class);
        $this->call(BookSeeder::class);
    }
}
