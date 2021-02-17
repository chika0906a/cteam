<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'area_id' => 'A0001',
            'area_name' => '神奈川県横浜市西区',
        ];
        DB::table('areas')->insert($param);

        $param = [
            'area_id' => 'A0002',
            'area_name' => '神奈川県横浜市中区',
        ];
        DB::table('areas')->insert($param);

        $param = [
            'area_id' => 'A0003',
            'area_name' => '神奈川県横浜市南区',
        ];
        DB::table('areas')->insert($param);
    }
}
