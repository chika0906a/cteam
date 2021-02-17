<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipetitleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'recipe' => 'R0001',
            'recipe_name' => 'オムライス',
            'howto' => 'チキンライスに卵をのせる',
        ];
        DB::table('Recipetitle')->insert($param);

        $param = [
            'recipe' => 'R0002',
            'recipe_name' => '寿司',
            'howto' => '酢飯に魚の切り身をのせる',
        ];
        DB::table('Recipetitle')->insert($param);

        $param = [
            'recipe' => 'R0003',
            'recipe_name' => 'チキンカレーライス',
            'howto' => '鶏肉と野菜を炒め、水を注ぎ煮込む。野菜に火が通ったらカレールーを入れる。',
        ];
        DB::table('Recipetitle')->insert($param);

        $param = [
            'recipe' => 'R0004',
            'recipe_name' => 'クリームシチュー',
            'howto' => '鶏肉と野菜を炒め、水を注ぎ煮込む。牛乳とシチュールーを入れる。',
        ];
        DB::table('Recipetitle')->insert($param);

        
        $param = [
            'recipe' => 'R0005',
            'recipe_name' => 'ブリ大根',
            'howto' => 'ブリは沸騰したお湯にくぐらせ、臭みを取る。大根は下茹でする。鍋に水・醤油・みりん・砂糖・おろししょうがを入れ煮立ったらブリと大根を加えて煮詰める。',
        ];
        DB::table('Recipetitle')->insert($param);
    }
}
