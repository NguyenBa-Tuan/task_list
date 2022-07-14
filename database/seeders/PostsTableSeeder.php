<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models as Database;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $posts = [
        	['post 1', 'slug-1', '1657695158.png','Content 1','1'],
            ['post 2', 'slug-2', '1657695240.png','Content 2','2'],
            ['post 3', 'slug-3', '1657695240.png','Content 3','3'],
            ['post 4', 'slug-4', '1657695240.png','Content 4','3'],
            ['post 5', 'slug-5', '1657695240.png','Content 5','2'],
        ];

        foreach ($posts as $post) {
            DB::table('posts')->insert([
                'title' => $post[0],
                'slug' => $post[1],
                'images' => $post[2],
                'content' => $post[3],
                'cate_id' => $post[4]
            ]);
        }

    }
}
