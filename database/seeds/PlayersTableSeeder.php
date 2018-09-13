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

        DB::table('players')->insert([
            'team_id' => 4,
            'team_name' => "Islanders",
            'country' => "Fiji Islands",
            'player_name' => "Bert Bacharat",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 1,
        ]);

        DB::table('players')->insert([
            'team_id' => 4,
            'team_name' => "Islanders",
            'country' => "Fiji Islands",
            'player_name' => "Kerry Man",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 1,
            'red_cards' => 0,
            'goals' => 1,
        ]);

        DB::table('players')->insert([
            'team_id' => 5,
            'team_name' => "Italian Stallions",
            'country' => "Italy",
            'player_name' => "Mattia Guitara",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
        ]);

        DB::table('players')->insert([
            'team_id' => 5,
            'team_name' => "Italian Stallions",
            'country' => "Italy",
            'player_name' => "Stefano Grand",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
        ]);

        DB::table('players')->insert([
            'team_id' => 5,
            'team_name' => "Italian Stallions",
            'country' => "Italy",
            'player_name' => "Michaele Viking",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
        ]);

        DB::table('players')->insert([
            'team_id' => 6,
            'team_name' => "Brazil Nuts",
            'country' =>"Brazil",
            'player_name' => "Peter Somebody",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
        ]);

        DB::table('players')->insert([
            'team_id' => 6,
            'team_name' => "Brazil Nuts",
            'country' =>"Brazil",
            'player_name' => "Lionel Legs",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
        ]);

        DB::table('players')->insert([
            'team_id' => 7,
            'team_name' => "The Dancers",
            'country' =>"Argentina",
            'player_name' => "Paul Grace",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
        ]);

        DB::table('players')->insert([
            'team_id' => 7,
            'team_name' => "The Dancers",
            'country' =>"Argentina",
            'player_name' => "Pietro Lietro",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
        ]);

        DB::table('players')->insert([
            'team_id' => 8,
            'team_name' => "Royaltea",
            'country' =>"United Kingdom",
            'player_name' => "Wayne The Rooney",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
        ]);

        DB::table('players')->insert([
            'team_id' => 8,
            'team_name' => "Royaltea",
            'country' =>"United Kingdom",
            'player_name' => "Beckham Bender",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
        ]);

        DB::table('players')->insert([
            'team_id' => 10,
            'team_name' => "Geese and Gander",
            'country' =>"Portugal",
            'player_name' => "Mario Mario",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
        ]);

        DB::table('players')->insert([
            'team_id' => 10,
            'team_name' => "Geese and Gander",
            'country' =>"Portugal",
            'player_name' => "Dario Dario",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
        ]);

        DB::table('players')->insert([
            'team_id' => 11,
            'team_name' => "Tequila Goals",
            'country' => "Mexico",
            'player_name' => "Eduardo Eliot",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
        ]);

        DB::table('players')->insert([
            'team_id' => 11,
            'team_name' => "Tequila Goals",
            'country' => "Mexico",
            'player_name' => "Elgin Chiquito",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
        ]);

        DB::table('players')->insert([
            'team_id' => 11,
            'team_name' => "Tequila Goals",
            'country' => "Mexico",
            'player_name' => "David Fernandez",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
        ]);

        DB::table('players')->insert([
            'team_id' => 12,
            'team_name' =>"Sony Boom",
            'country' => "Japan",
            'player_name' => "Michiko Takanaka",
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
            'player_name' => "MinJu Kim",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
        ]);

        DB::table('players')->insert([
            'team_id' => 14,
            'team_name' => "Rainbow Team",
            'country' =>"South Africa",
            'player_name' => "Tom Biko",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
        ]);

        DB::table('players')->insert([
            'team_id' => 14,
            'team_name' => "Rainbow Team",
            'country' =>"South Africa",
            'player_name' => "Ndele Hammer",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
        ]);

        DB::table('players')->insert([
            'team_id' => 15,
            'team_name' => "Team Coffee",
            'country' => "Colombia",
            'player_name' => "Jerry Garcia",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 1,
            'red_cards' => 0,
            'goals' => 1,
        ]);

        DB::table('players')->insert([
            'team_id' => 15,
            'team_name' => "Team Coffee",
            'country' => "Colombia",
            'player_name' => "Terry Mansir",
            'position' => "FW",
            'age' => 30,
            'weight' => 80,
            'height' => 170,
            'yellow_cards' => 1,
            'red_cards' => 0,
            'goals' => 1,
        ]);

        DB::table('players')->insert([
            'team_id' => 5,
            'team_name' => "Italian Stallions",
            'country' => "Italy",
            'player_name' => "Pietro Tall",
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
            'country' => "Algeria",
            'player_name' => "Nordine Terrible",
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
            'team_name' => "Les Revolutionaires",
            'country' =>"France",
            'player_name' => "Eric Bisccoti",
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
            'team_name' => "Les Revolutionaires",
            'country' =>"France",
            'player_name' => "Frederic Azulay",
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
            'team_name' => "Les Frites",
            'country' =>"Belgium",
            'player_name' => "Jean Claude Van",
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
            'team_name' => "Les Frites",
            'country' =>"Belgium",
            'player_name' => "Gerard Depard",
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
            'team_name' => "Les Frites",
            'country' =>"Belgium",
            'player_name' => "Claude Abode",
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
            'team_name' => "Les Revolutionaires",
            'country' =>"France",
            'player_name' => "Silvio Sapin",
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
            'player_name' => "Eddy Djamel",
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
            'player_name' => "Manuel Kirin",
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
