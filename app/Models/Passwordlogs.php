<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passwordlogs extends Model
{   protected $table="password_history";
    // protected $fillable=[
    //     'user_id', 'change_by_user', 'remarks'
    // ];
    use HasFactory;
}
