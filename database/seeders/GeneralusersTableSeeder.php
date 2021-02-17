<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneralusersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'あいうえお',
            'email' => 'aiueo@mail.com',
            'password' => 'aaaaa',
            'gender' => 'man',
            'birthday' => '20000101',
            'area_id' => 'A0001',
            'station_id' => 'S0002',
            'people_ind' => 2,
            
        ];
        DB::table('generalusers')->insert($param);

        $param = [
            'name' => 'ななな',
            'email' => 'nnnnn@mail.com',
            'password' => '9999',
            'gender' => 'woman',
            'birthday' => '20001031',
            'area_id' => 'A0002',
            'station_id' => 'S0002',
            'people_ind' => 1,
        ];
        DB::table('generalusers')->insert($param);

        $param = [
            'name' => 'み',
            'email' => 'mimimi@mail.com',
            'password' => 'mmmmm',
            'gender' => 'woman',
            'birthday' => '19951231',
            'area_id' => 'A0003',
            'station_id' => 'S0002',
            'people_ind' => 2,
        ];
        DB::table('generalusers')->insert($param);
    }
}
