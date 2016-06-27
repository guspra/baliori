<?php

namespace App\PartnerType;

use Illuminate\Database\Eloquent\Model;

class PartnerType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'partner_id', 'type'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'partner_type';

    /**
     * The attributes that become unique.
     *
     * @var array
     */
    protected $primaryKey = 'partner_id';

    /**
     * @return array
     */
    public function Partner()
	{
	    return $this->belongsTo('App\Models\Partner', 'partner_id', 'user_id');
	}
}
