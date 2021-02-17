<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'mail'=>'aiueo@mail.com',
            'ingredients_id'=>'I0001',
            'quantity'=>5,
        ];
        DB::table('stocks')->insert($param);
        $param=[
            'mail'=>'aiueo@mail.com',
            'ingredients_id'=>'I0003',
            'quantity'=>2,
        ];
        DB::table('stocks')->insert($param);
        $param=[
            'mail'=>'nnnnn@mail.com',
            'ingredients_id'=>'I0014',
            'quantity'=>1,
        ];
        DB::table('stocks')->insert($param);
        $param=[
            'mail'=>'nnnnn@mail.com',
            'ingredients_id'=>'I0015',
            'quantity'=>4,
        ];
        DB::table('stocks')->insert($param);
        }
}
