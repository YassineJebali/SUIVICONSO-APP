<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'type',
        'serial_number',
        'local_id',
        'avg_consommation',
    ];
    public function local()
    {
        return $this->belongsTo('App\Models\Local', 'local_id');
    }
}