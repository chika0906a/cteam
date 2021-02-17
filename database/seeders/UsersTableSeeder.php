<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '管理者1',
            'email' => 'kanri@mail.com',
            'password' => 'kkkkk',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '管理者2',
            'email' => 'kanri2@mail.com',
            'password' => 'kkk22'
        ];
        DB::table('users')->insert($param);
    }
}
