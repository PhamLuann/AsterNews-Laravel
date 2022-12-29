<?php

namespace Database\Seeders;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->truncate();
        DB::table('role_users')->truncate();
        DB::table('activations')->truncate();
        $admin = [
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => '1111',
        ];
        $insertAdmin = Sentinel::registerAndActivate($admin);
        $role = Sentinel::findRoleBySlug('admin');
        $role->users()->attach($insertAdmin);

        $user = [
            'name' => fake()->name(),
            'email' =>fake()->safeEmail(),
            'password' => '1234567@',
        ];
        for($i=1; $i<=100; $i++){
            $user['name'] = fake()->name();
            $user['email'] = fake()->safeEmail();
            $insert = Sentinel::registerAndActivate($user);
            $roleUser = Sentinel::findRoleBySlug('user');
            $roleUser->users()->attach($insert);
        }
    }
}
