<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::factory()->has(Blog::factory()->count(3))->count(4)->create();

        User::create([
            'name' => 'Marko',
            'email' => 'admin@gmail.com',
            'password' => bcrypt(123456789),
        ])->roles()->attach(1);
    }
}
