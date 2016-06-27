<?php

namespace App\RoomFacility;

use Illuminate\Database\Eloquent\Model;

class RoomFacility extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'room_id', 'facility_id',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'room_facility';

    /**
     * The attributes that become unique.
     *
     * @var array
     */
    protected $primaryKey = ['room_id', 'facility_id'];

    /**
     * @return array
     */
    public function Room()
	{
	    return $this->belongsTo('App\Models\Room', 'room_id', 'item_id');
	}

	/**
     * @return array
     */
    public function Facility()
	{
	    return $this->belongsTo('App\Models\Facility', 'facility_id', 'id');
	}
}
