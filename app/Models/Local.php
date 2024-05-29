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

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

    /**
     * Get the local family that owns the local.
     */
    public function localFamily()
    {
        return $this->belongsTo(Local_Family::class);
    }

    public function counters()
    {
        return $this->hasMany('App\Models\Counter', 'local_id');
    }
    
    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'local_id');
    }

    // Define other relationships here
}