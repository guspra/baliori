<?php

namespace App\Room;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
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
    protected $table = 'room';

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

    /**
     * @return array
     */
    public function RoomFacility()
    {
        return $this->hasMany('App\Models\RoomFacility', 'room_id', 'item_id');
    }
}
