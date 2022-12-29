<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();
        Role::factory()->create([
            'slug'=>'admin',
            'name'=>'admin',
        ]);
        Role::factory()->create([
            'slug'=>'user',
            'name'=>'user',
        ]);

        DB::table('users')->truncate();
        DB::table('role_users')->truncate();
        DB::table('activations')->truncate();
        $admin = [
             'name' => 'Admin',
             'email' => 'admin@admin.com',
             'password' => '1111',
             'createBy' => 'Seeder',
        ];
        $insertAdmin = Sentinel::registerAndActivate($admin);
        $role = Sentinel::findRoleBySlug('admin');
        $role->users()->attach($insertAdmin);

        $user = [
            'name' => fake()->name(),
            'email' =>fake()->safeEmail(),
            'password' => '1234567@',
            'createBy' => 'Seeder',
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
