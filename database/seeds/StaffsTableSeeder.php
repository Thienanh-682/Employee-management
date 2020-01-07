<?php

use Illuminate\Database\Seeder;

class StaffsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staff = new \App\Staff();
        $staff->name = "Nguyễn Phương Anh";
        $staff->day_of_birth = "03/06/1994";
        $staff->gender = "Nam";
        $staff->phone = "0365741513";
        $staff->id_card = "187709682";
        $staff->email = "phuonganh@gmail.com";
        $staff->address = "Hà Nội ";
        $staff->role_id = 1;
        $staff->save();
    }
}
