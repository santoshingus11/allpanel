<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BetHistory extends Model
{
    // use HasFactory;
    protected $table='bet_histories';
    public function client()
    {
        return $this->belongsTo(Admin::class, 'client_id');
    }

    public function deletedBy()
    {
        return $this->belongsTo(Admin::class, 'deleted_by');
    }
}
