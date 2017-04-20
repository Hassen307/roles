<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

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

        $user = new User();
        $user->role_id = 1;
        $user->name = 'Hassen ben abdelhafidh';
        $user->email = 'benabdelhafidh.hassen@gmail.com';
        $user->password = bcrypt('111111');
        $user->save();

        $user->roles()->attach($role_admin);
    }
}
