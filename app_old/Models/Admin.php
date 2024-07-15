<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Laravel\Passport\HasApiTokens;

class Admin extends Authenticatable
{
 

    use Notifiable ;
    protected $guarded = ['id'];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'admin_access' => 'object'
    ];

    public function bethistories(){
        return $this->hasMany(BetHistory::class,'client_id');
    }

}
