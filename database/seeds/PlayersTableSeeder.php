<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            'team_id' => 1,
            'team_name' => "The Algerians",
            'country' => "Algeria",
            'player_name' => "Antoine Griezmann",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
        ]);    

        DB::table('players')->insert([
            'team_id' => 2,
            
            'team_name' =>"Les Revolutionaires",
            'country' => "France",
            'player_name' => "Jean Valjean",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
        ]);    

        DB::table('players')->insert([
            'team_id' => 3,
            
            'team_name' => "The Frites",
            'country' => "Belgium",
            'player_name' => "Charles Frites",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
        ]);    

        DB::table('players')->insert([
            
            'team_id' => 9,
            'team_name' =>"Tivolians",
            'country' => "Denmark",
            'player_name' => "Michael Tuxen",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
        ]);    

        DB::table('players')->insert([
            'team_id' => 13,

            'team_name' => "Core Players",
            'country' =>"South Korea",
            'player_name' => "TaeHo Park",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
        ]);    

        DB::table('players')->insert([
            'team_id' => 1,
            
            'team_name' => "The Algerians",
            'country' =>"Algeria",
            'player_name' => "Nordine Hummulu",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
        ]);    
    }
}
