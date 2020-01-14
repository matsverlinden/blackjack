<?php

use Illuminate\Database\Seeder;

class GameroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gamerooms')->insert([
            'player_id' => 1,
            'name' => Str::random(10),
            'created_at' =>NOW(),
            'updated_at' =>NOW(),
        ]);
    }
}
