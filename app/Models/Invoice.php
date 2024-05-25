<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
        // Payment statuses
        const UNPAID = 'unpaid';
        const PARTIALLY_PAID = 'partially_paid';
        const PAID = 'paid';
    
        public static $PAYMENT_STATUSES = [
            self::UNPAID,
            self::PARTIALLY_PAID,
            self::PAID,
        ];
        // Periods
        const MONTHLY_CONSUMPTION = 'monthly_consumption';
        const QUATERLY_CONSUMPTION = 'quaterly_consumption';
        const HALFYEARLY_CONSUMPTION = 'halfyearly_consumption';

        public static $PERIODS = [
            self::MONTHLY_CONSUMPTION,
            self::QUATERLY_CONSUMPTION,
            self::HALFYEARLY_CONSUMPTION,
        ];

    protected $fillable = [
        'reference',
        'date',
        'issue_date',
        'due_date',
        'consumption',
        'nextIndexReading',
        'pleasePayBefore',
        'amount',
        'payment_status',
        'period',
        'local_id',
        'counter_id'
    ];

    public function local()
    {
        return $this->belongsTo(Local::class, 'local_id');
    }

    public function counters()
    {
        return $this->belongsToMany(Counter::class, 'counter_invoice')
                    ->withPivot('reading_date', 'billing_method', 'notes');
    }
}