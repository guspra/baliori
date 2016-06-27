<?php

namespace App\Partner;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','address', 'religion', 'bank_account', 'id_card_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'bank_account', 'id_card_number',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'partner';

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

	/**
     * @return array
     */
    public function PartnerType()
    {
        return $this->hasOne('App\Models\PartnerType', 'partner_id', 'user_id');
    }

    /**
     * @return array
     */
    public function Item()
    {
        return $this->hasMany('App\Models\Item', 'partner_id', 'user_id');
    }
}
