<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local_Family extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'local_families';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'parent_id', // Added the parent_id attribute
    ];

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID';

    /**
     * Get the parent local family.
     */
    public function parentFamily()
    {
        return $this->belongsTo(Local_Family::class, 'parent_id');
    }

    /**
     * Get the sub local families.
     */
    public function subFamilies()
    {
        return $this->hasMany(Local_Family::class, 'parent_id');
    }

    /**
     * Get the locals for the local family.
     */
    public function locals()
    {
        return $this->hasMany(Local::class);
    }
}