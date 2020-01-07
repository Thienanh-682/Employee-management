<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new \App\Role();
        $role->role = "quản lí hệ thống";
        $role->save();

        $role = new \App\Role();
        $role->role = "Quản lí nhân sự ";
        $role->save();

        $role = new \App\Role();
        $role->role = "Quản Lý Phòng";
        $role->save();
    }
}
