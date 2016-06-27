<?php

namespace App\Car;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item_id'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'car';

    /**
     * The attributes that become unique.
     *
     * @var array
     */
    protected $primaryKey = 'item_id';

    /**
     * @return array
     */
    public function Item()
	{
	    return $this->belongsTo('App\Models\Item', 'item_id', 'id');
	}
}
