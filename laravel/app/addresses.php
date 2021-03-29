<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class addresses extends Model
{
    protected $table = 'addresses';

    public function user()
    {
        return $this->hasMany('app\Models\user', 'user_ID',  'ID');
    }
}