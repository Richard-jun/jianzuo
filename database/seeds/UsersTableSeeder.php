<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=0; $i<=100; $i++){
            DB::table('users')->insert($this->users());
        }

    }


    /**
     * get seeder data
     * @return array
     */
    public function users()
    {
        return [
            'name' => str_random(5),
            'email' => str_random(7).'@qq.com',
            'password' => encrypt('admin'),
            'phone' => '1'.mt_rand(100, 999).mt_rand(1000,9999).mt_rand(100,999)
        ];
    }
}
