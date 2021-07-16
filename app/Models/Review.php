<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'content' , 'user_id', 'prodcut_id' ,'created_at' , 'updated_at'
    ];
    protected $hidden  = ['created_at' , 'updated_at'];
    protected $dates    = ['deleted_at'];

    public function prodcut()  {
        return $this->belongsTo('App\Models\prodcut' , 'prodcut_id');
    }

    public function user() {
        return $this->belongsTo('App\User' , 'user_id');
    }
}
