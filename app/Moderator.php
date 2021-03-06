<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Moderator extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','first_name','last_name', 'email', 'password','is_available','is_activated','timezone'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the Redeems
     */

    public function moderatorRedeem() {
        return $this->hasOne('App\Redeem' , 'moderator_id' , 'id');
    }

    /**
     * Get the Redeems
     */
    
    public function moderatorRedeemRequests() {
        return $this->hasMany('App\RedeemRequest')->orderBy('status' , 'asc');
    }
}
