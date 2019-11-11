<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    //
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'user_name',  'user_password',
    ];
    
    protected $hidden = [
        'user_password'
    ];
}
