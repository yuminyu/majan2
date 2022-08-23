<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class JansoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jansos')->insert([
            [
                'name'=>'渋谷ウェルカム',
                'tokutyo'=>'渋谷駅から歩いて5分、いつも卓が立っている',
                'seiketsusa'=> 5,
                'huniki' => 5,
                'yasusa' => 5,
                'mataikitai' => 5,
                'location' => '渋谷'
            ],
            [
                'name'=>'原宿ウェルカム',
                'tokutyo'=>'原宿駅から歩いて5分、見つけづらい場所にあるけど',
                'seiketsusa'=> 1,
                'huniki' => 2,
                'yasusa' => 3,
                'mataikitai' => 4,
                'location' => '原宿'
            ]
        ]);
    }
}
