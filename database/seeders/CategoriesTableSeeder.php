<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [
            ['cat 1','cat-1'],
            ['cat 2','cat-2'],
            ['cat 3','cat-3'],
        ];

        foreach ($categories as $category){
            DB::table('categories')->insert([
                'cate_name' => $category[0],
                'cate_slug' => $category[1],
            ]);
        }
    }
}
