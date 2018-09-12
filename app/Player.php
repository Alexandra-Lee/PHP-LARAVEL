<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'player_name', 'id', 'team_name', 'position', 'age', 'height', 'weight'
    ];

    public function team(){
        return $this->belongsTo('App\Team');
    }    
}
