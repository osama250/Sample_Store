<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    protected $table = 'prodcut_user';
    protected $fillable = ['user_id', 'prodcut_id' , 'created_at' , 'updated_at'];
    protected $hidden   = ['created_at' , 'updated_at'];
    protected $dates    = ['deleted_at'];
}
