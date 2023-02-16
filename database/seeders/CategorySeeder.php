<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $catOne= Category::create(['name' => 'catOne']);
        $catTWOwo= Category::create(['name' => 'catTwo']);
        $catThree= Category::create(['name' => 'catThree']);
        $catFour= Category::create(['name' => 'catFour']);
        $catFive= Category::create(['name' => 'catFive']);




    }
}
