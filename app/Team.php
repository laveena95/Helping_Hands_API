<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Team extends Model
{
    protected $fillable = [
        'team_id',
        'name',
        'country',
        'state',
        'city',
        'lane',
        'startup',
        'countryS',
        'stateS',
        'cityS',
        'phone',
        'mobile',
        'email',
        'website',
        'proof'  
    ];

    
   public function team(){
       return $this->belongsTo('App\User');
   }
}
