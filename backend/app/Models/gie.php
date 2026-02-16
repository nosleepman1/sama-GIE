<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gie extends Model
{
    protected $table = "gies";

    protected $fillable = [
        'name',
        'NINEA',
        'address',
        'owner_id'
    ];
}
