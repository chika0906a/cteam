<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'mail'=>'itoyo@mail.com',
            'day'=>'20201105',
            'info_title'=>'割引のご案内',
            'info_text'=>'キャベツ100円',
            'station_id' => 'S0001',
        ];
        DB::table('info')->insert($param);

        $param=[
            'mail'=>'seven@mail.com',
            'day'=>'20201106',
            'info_title'=>'お得情報',
            'info_text'=>'レタス150円',
            'station_id' => 'S0002',
        ];
        DB::table('info')->insert($param);

        $param=[
            'mail'=>'famima@mail.com',
            'day'=>'20201107',
            'info_title'=>'☆☆お知らせ☆☆',
            'info_text'=>'本日中おにぎり100円！',
            'station_id' => 'S0003'
        ];
        DB::table('info')->insert($param);
    }
}