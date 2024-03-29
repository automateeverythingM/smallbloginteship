<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = Role::find(2);

        User::all()->each(function ($user) use ($roles) {
            $user->roles()->attach(
                $roles
            );
        });
    }
}
