<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'address',
        'region_id',
        'family_local_id',
        'sub_family_local_id',
        'longitude',
        'altitude',
    ];

    /**
     * Get the region that owns the local.
     */
    public function region()
    {
        return $this->belongsTo('App\Models\Region');
    }

    public function user()
    {
        return $this->hasOne('App\Models\User');
    }

    // Define other relationships here
}