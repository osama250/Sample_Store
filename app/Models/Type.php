<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    use SoftDeletes;
    protected $fillable     = ['size', 'color' , 'created_at' , 'updated_at'];
    protected $hidden       = ['created_at' , 'updated_at'];
    protected $dates        = ['deleted_at'];

    public function prodcuts_type() {             // Many type of prodcut
        return $this->belongsToMany('App\prodcut');
    }
}
