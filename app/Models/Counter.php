<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Invoice;

class Counter extends Model
{
    use HasFactory;

    // Billing methods
    const FLATE_RATE = 'flate_rate';
    const TIME_OF_USE = 'time_of_use';
    const DEMAND_BASED = 'demand_based';

    public static $billingmethods = [
        self::FLATE_RATE,
        self::TIME_OF_USE,
        self::DEMAND_BASED,
    ];

    protected $fillable = [
        'id',
        'type',
        'serial_number',
        'local_id',
        'avg_consumption',
    ];

    public function local()
    {
        return $this->belongsTo(Local::class, 'local_id');
    }

    public function invoices()
    {
        return $this->belongsToMany(Invoice::class, 'counter_invoice')
                    ->withPivot('reading_date', 'billing_method', 'notes');
    }
}