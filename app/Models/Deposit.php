<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;

    protected $table = 'deposits';
    protected $guarded = [];

    // public $primaryKey = 'id';
    public function user()
    {
        return $this->belongsTo(Admin::class, 'user_id');
    }
}
