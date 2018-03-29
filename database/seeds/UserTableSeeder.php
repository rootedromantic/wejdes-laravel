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
        $role_guest  = Role::where('name', 'guest')->first();
        $admin = new User();
        $admin->name = 'Admin Name';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);
        $guest = new User();
        $guest->name = 'Guest Name';
        $guest->email = 'guest@example.com';
        $guest->password = bcrypt('secret');
        $guest->save();
        $guest->roles()->attach($role_guest);
    }
}
