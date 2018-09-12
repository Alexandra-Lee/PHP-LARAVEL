<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'id' => 1,
            'team_name' =>"The Algerians",
            'country' => "Algeria",
            'flag' => "images/algeria.png",
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
            'wins' => 0,
            'total_matches' => 0]);
        
        DB::table('teams')->insert([
            'id' => 2,
            'team_name' => "Les Revolutionaires",
            'country' => "France",
            'flag' => "images/france.png",
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
            'wins' => 0,
            'total_matches' => 0]);    

        DB::table('teams')->insert([
            'id' => 3,
            'team_name' =>"Les Frites",
            'country' => "Belgium",
            'flag' => "images/belgium.png",
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
            'wins' => 0,
            'total_matches' => 0]);
        
        DB::table('teams')->insert([
            'id' => 4,
            'team_name' => "Islanders",
            'country' => "Fiji Islands",
            'flag' => "images/fiji.png",
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
            'wins' => 0,
            'total_matches' => 0]);         

        DB::table('teams')->insert([
            'id' => 5,
            'team_name' =>"Italian Stallions",
            'country' => "Italy",
            'flag' => "images/italy.png",
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
            'wins' => 0,
            'total_matches' => 0]);
        
        DB::table('teams')->insert([
            'id' => 6,
            'team_name' => "Brazil Nuts",
            'country' => "Brazil",
            'flag' => "images/brazil.png",
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
            'wins' => 0,
            'total_matches' => 0]);    
                
        DB::table('teams')->insert([
            'id' => 7,
            'team_name' =>"The Dancers",
            'country' => "Argentina",
            'flag' => "images/argentina.png",
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
            'wins' => 0,
            'total_matches' => 0]);
        
        DB::table('teams')->insert([
            'id' => 8,
            'team_name' => "Toffs",
            'country' => "United Kingdom",
            'flag' => "images/united-kingdom.png",
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
            'wins' => 0,
            'total_matches' => 0]);    

        DB::table('teams')->insert([
            'id' => 9,
            'team_name' =>"Tivolians",
            'country' => "Denmark",
            'flag' => "images/denmark.png",
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
            'wins' => 0,
            'total_matches' => 0]);
                    
        DB::table('teams')->insert([
            'id' => 10,
            'team_name' => "Geese and Gander",
            'country' => "Portugal",
            'flag' => "images/portugal.png",
            'yellow_cards' => 0,
            'red_cards' => 0,
            'goals' => 0,
            'wins' => 0,
            'total_matches' => 0]);    

            DB::table('teams')->insert([
                'id' => 11,

                'team_name' =>"Tequila Goals",
                'country' => "Mexico",
                'flag' => "images/mexico.png",
                'yellow_cards' => 0,
                'red_cards' => 0,
                'goals' => 0,
                'wins' => 0,
                'total_matches' => 0]);
            
            DB::table('teams')->insert([
                'id' => 12,
                'team_name' => "Sony Boom",
                'country' => "Japan",
                'flag' => "images/japan.png",
                'yellow_cards' => 0,
                'red_cards' => 0,
                'goals' => 0,
                'wins' => 0,
                'total_matches' => 0]); 
                
            DB::table('teams')->insert([
                'id' => 13,
                'team_name' =>"Core Players",
                'country' => "South Korea",
                'flag' => "images/south-korea.png",
                'yellow_cards' => 0,
                'red_cards' => 0,
                'goals' => 0,
                'wins' => 0,
                'total_matches' => 0]);
            
            DB::table('teams')->insert([
                'id' => 14,
                'team_name' => "Rainbow Team",
                'country' => "South Africa",
                'flag' => "images/south-africa.png",
                'yellow_cards' => 0,
                'red_cards' => 0,
                'goals' => 0,
                'wins' => 0,
                'total_matches' => 0]);    

            DB::table('teams')->insert([
                'id' => 15,
                'team_name' =>"Team Coffee",
                'country' => "Colombia",
                'flag' => "images/columbia.png",
                'yellow_cards' => 0,
                'red_cards' => 0,
                'goals' => 0,
                'wins' => 0,
                'total_matches' => 0]);
             
    }
}
