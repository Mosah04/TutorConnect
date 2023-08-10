<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Disponibilite extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'heure_debut',
        'heure_fin'
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
