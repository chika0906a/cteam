<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusTableSeeder extends Seeder
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
            'recipe' => 'R0001',
        ];
        DB::table('Menus')->insert($param);

        $param = [
            'mail' => 'aiueo@mail.com',
            'day' => '2020-11-02',
            'recipe' => 'R0002',
        ];
        DB::table('Menus')->insert($param);

        $param = [
            'mail' => 'nnnnn@mail.com',
            'day' => '2020-11-03',
            'recipe' => 'R0001',
        ];
        DB::table('Menus')->insert($param);
    }
}
