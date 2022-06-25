<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class articleseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $faker=Faker::create('id_ID');
        for($i=1;$i<=10;$i++){
            DB::table('article')->insert([
                'title'=>$faker->name,
                'content'=>$faker->address,
                'image' =>$faker->address,
                'user_id'=>$faker->uuid,
                'category_id'=>$faker->uuid
            ]);
        }
    }
}
