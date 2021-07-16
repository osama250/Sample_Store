<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class profile_users extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'adress', 'phone', 'gender', 'city' , 'user_id' , 'created_at' , 'updated_at'
    ];
        protected $hidden  = ['created_at' , 'updated_at'];
        protected $dates        = ['deleted_at'];

    public function user() {
        return $this->belongsTo('App\User' , 'user_id');
    }
}
