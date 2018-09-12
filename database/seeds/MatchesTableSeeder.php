<?php

use Illuminate\Database\Seeder;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matches')->insert([
            'team1' => 'France',
            'team2' => 'Italy',
            'date' => "22/06, Friday",
            'time' => '17:00',
            'goals1' => 0,
            'goals2' => 0,
        ]);  

        DB::table('matches')->insert([
            'team1' => 'Denmark',
            'team2' => 'Fiji Islands',
            'date' => "23/06, Saturday",
            'time' => '15:00',
            'goals1' => 0,
            'goals2' => 0,
        ]);  
    }
}
