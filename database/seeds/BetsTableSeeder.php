<?php

use Illuminate\Database\Seeder;

class BetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bets')->insert([
        'id' => 1,
        'match_id' => 1,
        'country' => "Italy",
        'amount' => 50,
        ]);
        
        DB::table('bets')->insert([
        'id' => 2,
        'match_id' => 2,
        'country' => "South Korea",
        'amount' => 10,
        ]);
        
    }
}
