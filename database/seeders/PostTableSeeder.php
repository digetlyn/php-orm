<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

use function Laravel\Prompts\table;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('posts')->insert([
        //    'subject'=>'첫번째 시딩 제목입니다.',
        //     'content'=>'본문입니다.'
        // ]);
        $faker = Faker::create();
        foreach(range(1,100)as $index){   //range(1,100) 은 1~100까지 숫자가 생성된다?
            DB::table('posts')->insert([
                'subject'=> $faker->sentence(5),   //sentence 단어를 넣는다는 뜻
                'content'=> $faker->paragraph(4),  //paragraph 절을 넣는다는 뜻
                'email'=>$faker->email()

            ]);
        }
    }
}
