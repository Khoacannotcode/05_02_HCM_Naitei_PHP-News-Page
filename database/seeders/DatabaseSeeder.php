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
        DB::table('users')->insert([
            'name' => "nvkhoa",
            'email' => 'nvkhoa.ne@gmail.com',
            'password' => Hash::make('123123123'),
            'role_id' => 0,
        ]);
    }
}
