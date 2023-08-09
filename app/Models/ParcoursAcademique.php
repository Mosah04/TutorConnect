<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ParcoursAcademique extends Model
{
    use HasFactory;
    protected $fillable = [
        'ecole',
        'diplome',
        'annee'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
