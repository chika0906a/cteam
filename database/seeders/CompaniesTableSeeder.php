<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'password' => 'iiiii',
            'company_name' => 'イトーヨーカドー東神奈川店',
            'company_mail' => 'itoyo@mail.com',
            'area_id' => 'A0001',
            'station_id' => 'S0001',
        ];
        DB::table('companies')->insert($param);

        $param = [
            'password' => 'sssss',
            'company_name' => 'セブンイレブン横浜店',
            'company_mail' => 'seven@mail.com',
            'area_id' => 'A0002',
            'station_id' => 'S0002',
        ];
        DB::table('companies')->insert($param);

        $param = [
            'password' => 'sssss',
            'company_name' => 'ファミリーマート上大岡店',
            'company_mail' => 'famima@mail.com',
            'area_id' => 'A0003',
            'station_id' => 'S0003',
        ];
        DB::table('companies')->insert($param);

    }
}
