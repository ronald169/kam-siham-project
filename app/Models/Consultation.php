<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Consultation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function treatments() : MorphMany
    {
        return $this->morphMany(Treatment::class, 'treatmentable');
    }
}
