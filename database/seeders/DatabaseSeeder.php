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
        // User::factory(10)->create();
        \App\Models\Admin::create([
            'email' => 'admin@mail.com',
            'password' => bcrypt('123123'),
            'is_admin' => 1,
        ]);
    }
}
