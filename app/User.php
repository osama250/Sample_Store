<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    protected $fillable = [
        'name', 'email', 'password' , 'is_admin' , 'created_at' , 'updated_at'
    ];
    protected $dates  = ['deleted_at'];

    public function profile() {                               //  user have on profile
        return $this->hasOne('App\Models\profile_users');
    }

    public function user_reviews() {                        //  user have many reviews
        return $this->HasMany('App\Models\Review');
    }

    public function my_orders() {                          // user have many orders
        return $this->belongsToMany('App\Models\Prodcut');
    }

    protected $hidden = [
        'password', 'remember_token', 'created_at' , 'updated_at'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
