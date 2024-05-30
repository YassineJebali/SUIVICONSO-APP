<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'imagepath',
    ];

    /**
     * Get the locals for the region.
     */
    public function locals()
    {
        return $this->hasMany(Local::class);
    }
}