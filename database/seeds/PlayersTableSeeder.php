<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * this was not required but i did it any
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            'name' => Str::random(10),
            'created_at' =>NOW(),
            'updated_at' =>NOW(),
        ]);
    }
}
