<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 仮に posts と users テーブルが存在し、
        // それぞれに最低10レコードが存在すると仮定します。

        for ($i = 0; $i < 10; $i++) {
            DB::table('threads')->insert([
                'post_id' => rand(1, 10), // ランダムなpost_id
                'user_id' => rand(1, 10), // ランダムなuser_id
                'reply' => Str::random(200), // ランダムな本文
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
