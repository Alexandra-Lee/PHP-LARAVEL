<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $primaryKey = 'match_id';

    protected $fillable = [
        'team1', 'team2', 'date', 'time', 'goals1', 'goals2'
    ];
}
