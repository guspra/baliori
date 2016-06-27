<?php

namespace App\Item;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'partner_id', 'name', 'stock', 'price', 'address',
        'latitude', 'longitude', 'note'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'item';

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
	    return $this->belongsTo('App\Models\Partner', 'partner_id', 'user_id');
	}

	/**
     * @return array
     */
    public function Bike()
    {
        return $this->hasOne('App\Models\Bike', 'item_id', 'id');
    }

    /**
     * @return array
     */
    public function Car()
    {
        return $this->hasOne('App\Models\Car', 'item_id', 'id');
    }

    /**
     * @return array
     */
    public function Room()
    {
        return $this->hasOne('App\Models\Room', 'item_id', 'id');
    }
}

