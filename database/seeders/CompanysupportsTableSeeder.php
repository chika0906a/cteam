<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanysupportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'mail' => 'itoyo@mail.com',
            'support_mail' => 'itoyo123@mail',
            'day' => '2020-12-01',
            'support_text' => '質問です',
        ];
        DB::table('companysupports')->insert($param);

        $param = [
            'mail' => 'seven@mail.com',
            'support_mail' => 'aiueo999@mail.com',
            'day' => '2020-12-02',
            'support_text' => 'かきくけこ',
        ];
        DB::table('companysupports')->insert($param);

        $param = [
            'mail' => 'famima@mail.com',
            'support_mail' => 'famima99@mail.com',
            'day' => '2020-12-03',
            'support_text' => 'さしすせそ',
        ];
        DB::table('companysupports')->insert($param);
    }
}
