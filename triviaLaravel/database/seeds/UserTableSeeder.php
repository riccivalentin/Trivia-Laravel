<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();

        DB::table('users')->insert([
            [
                "name" => "Admin",
                "surname" => "Admin",
                "alias" => "admin",
                "email" => "admin@admin.com",
                "image" => "image-default.png",
                "puntos" => "0",
                "aciertos" => "0",
                "fallos" => "0",
                "password" => bcrypt('soyadmin')
            ],
        ]);
       
    }
}
