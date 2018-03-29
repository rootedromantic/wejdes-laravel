<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'An admin';
        $role_admin->save();
        $role_guest = new Role();
        $role_guest->name = 'guest';
        $role_guest->description = 'A visitor';
        $role_guest->save();
    }
}
