<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
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
            'ingredients_id' => 'I0001',
            'quantity' => '3',
        ];
        DB::table('Orders')->insert($param);

        $param = [
            'mail' => 'aiueo@mail.com',
            'ingredients_id' => 'I0004',
            'quantity' => '100',
        ];
        DB::table('Orders')->insert($param);

        $param = [
            'mail' => 'aiueo@mail.com',
            'ingredients_id' => 'I0015',
            'quantity' => '1',
        ];
        DB::table('Orders')->insert($param);
    }
}
