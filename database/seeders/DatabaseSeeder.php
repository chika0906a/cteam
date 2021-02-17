<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StationsTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
        $this->call(AreasTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(InfoTableSeeder::class);
        $this->call(IngredientsTableSeeder::class);
        $this->call(RecipetitleTableSeeder::class);
        $this->call(RecipedetailsTableSeeder::class);
        $this->call(GeneralusersTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(SupportsTableSeeder::class);
        $this->call(CompanysupportsTableSeeder::class);
        $this->call(Shopping_historyTableSeeder::class);
        $this->call(StocksTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
