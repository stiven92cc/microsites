<?php

namespace App\Infrastructure\Persistence\Models;

use Database\Factories\PaymentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';

    protected $guarded = [];

    public function microsite(): BelongsTo
    {
        return $this->belongsTo(Microsite::class);
    }

    protected static function newFactory(): PaymentFactory
    {
        return PaymentFactory::new();
    }

    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }

    public function subscription(): HasOne
    {
        return $this->hasOne(Subscription::class);
    }
}
