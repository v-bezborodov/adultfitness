<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class follower extends Model {
    protected $fillable = [
        'trainer_id',
        'user_id',
    ];
}
