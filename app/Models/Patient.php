<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Patient extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'parent_identity' => 'array',
        'children' => 'array',
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // public function treatments() : MorphMany
    // {
    //     return $this->morphMany(Treatment::class, 'treatmentable');
    // }

    public function consultation() : HasOne
    {
        return $this->hasOne(Consultation::class);
    }
}
