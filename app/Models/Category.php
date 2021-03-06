<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'description' ,'photo' ,'created_at' , 'updated_at'];
    protected $hidden   = ['created_at' , 'updated_at'];
    protected $dates    = ['deleted_at'];

    public function prodcuts() {
        return $this->hasMany('App\Models\prodcut');
    }
}
