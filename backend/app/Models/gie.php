<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class gie extends Model
{
    /** @use HasFactory<\Database\Factories\GieFactory> */

    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'NINEA',
        'address',
        'owner_id'
    ];

    


}
