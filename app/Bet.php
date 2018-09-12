<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
    protected $primaryKey = 'bet_id';

    protected $fillable = [
        'country', 'amount'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
