<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function user()
    {
        return $this->belongsToMany(User::class, 'user_permissions', 'user_id');
    }
}

