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
        $this->call(UserSeeder::class);
        $this->call(RecipeSeeder::class);
        $this->call(IngredientSeeder::class);
        $this->call(InstructionSeeder::class);
    }
}
