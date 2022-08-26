<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        Admin::create([
            'nama_admin' => 'Icha Putri',
            'email' => 'ichaputri@gmail.com',
            'password' => 'icha' 
        ]);
    }
}
