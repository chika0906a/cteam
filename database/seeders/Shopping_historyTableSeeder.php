<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Shopping_historyTableSeeder extends Seeder
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
            'day' => '2020-11-01',
            'ingredients_id' => 'I0001',
            'quantity' => 2,
            'company_id' => 1,
        ];
        DB::table('Shopping_history')->insert($param);

        $param = [
            'mail' => 'aiueo@mail.com',
            'day' => '2020-11-01',
            'ingredients_id' => 'I0002',
            'quantity' => 1,
            'company_id' => 1,
        ];
        DB::table('Shopping_history')->insert($param);

        $param = [
            'mail' => 'aiueo@mail.com',
            'day' => '2020-11-02',
            'ingredients_id' => 'I0001',
            'quantity' => 5,
            'company_id' => null,
        ];
        DB::table('Shopping_history')->insert($param);

        $param = [
            'mail' => 'mimimi@mail.com',
            'day' => '2020-11-01',
            'ingredients_id' => 'I0001',
            'quantity' => 6,
            'company_id' => 2,
        ];
        DB::table('Shopping_history')->insert($param);

        $param = [
            'mail' => 'nnnnn@mail.com',
            'day' => '2020-11-02',
            'ingredients_id' => 'I0001',
            'quantity' => 1,
            'company_id' => 2,
        ];
        DB::table('Shopping_history')->insert($param);
    }
}
