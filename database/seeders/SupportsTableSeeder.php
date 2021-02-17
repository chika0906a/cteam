<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'mail' => 'aiueo@mail.com',
            'support_mail' => 'itoyo123@mail',
            'day' => '2020-10-31',
            'support_text' => 'ログインできません',
        ];
        DB::table('supports')->insert($param);

        $param = [
            'mail' => 'aiueo@mail.com',
            'support_mail' => 'aiueo999@mail.com',
            'day' => '2020-11-01',
            'support_text' => '退会したいです',
        ];
        DB::table('supports')->insert($param);


    }
}
