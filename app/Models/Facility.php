<?php

namespace App\Facility;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'facility';

    /**
     * The attributes that become unique.
     *
     * @var array
     */
    protected $primaryKey = 'id';

    /**
     * @return array
     */
    public function RoomFacility()
    {
        return $this->hasMany('App\Models\RoomFacility', 'facility_id', 'id');
    }
}
