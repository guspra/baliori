<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone'
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
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user';

    /**
     * The attributes that become unique.
     *
     * @var array
     */
    protected $primaryKey = 'id';
    
    /**
     * @return array
     */
    public function Partner()
    {
        return $this->hasOne('App\Models\Partner', 'user_id', 'id');
    }

    /**
     * @return array
     */
    public function Administrator()
    {
        return $this->hasOne('App\Models\Administrator', 'user_id', 'id');
    }

    /**
     * @return array
     */
    public function Customer()
    {
        return $this->hasOne('App\Models\Customer', 'user_id', 'id');
    }
    
}
