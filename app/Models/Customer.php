<?php

namespace App\Customer;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customer';

    /**
     * The attributes that become unique.
     *
     * @var array
     */
    protected $primaryKey = 'user_id';

    /**
     * @return array
     */
    public function User()
	{
	    return $this->belongsTo('App\Models\User', 'user_id', 'id');
	}
}
