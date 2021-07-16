<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prodcut extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'content', 'price' , 'photo' , 'category_id' ,'created_at' , 'updated_at'
    ];
    protected $hidden  = ['created_at' , 'updated_at'];
    protected $dates    = ['deleted_at'];

    public function category() {                        //  prodcut have one category
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function reviews() {                      //  prodcut have many reviews
        return $this->hasMany('App\Models\Review');
    }

    public function types() {                       //  prodcut have many type
        return $this->belongsToMany('App\Models\Type');
    }
    public function orders() {
        return $this->belongsToMany('App\User');
    }
}
