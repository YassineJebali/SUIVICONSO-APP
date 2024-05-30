<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permission;
use InvalidArgumentException;

class Role extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'nom',
        'description',
        'permission_id', // Assuming 'permission_id' is the foreign key for 'PERMISSION'
    ];
    public function setNomAttribute($value)
    {
        $allowed = ['inputuser', 'localmanager', 'admin'];

        if (! in_array($value, $allowed)) {
            throw new InvalidArgumentException("Invalid role name");
        }

        $this->attributes['nom'] = $value;
    }

    /**
     * Get the users associated with the role.
     */
    public function users()
    {
        return $this->hasMany(User::class, 'role_id');
    }

    /**
     * Get the permissions associated with the role.
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}