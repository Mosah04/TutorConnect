<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ParcoursProfessionnel extends Model
{
    use HasFactory;

    protected $fillable = [
        'entreprise',
        'poste',
        'date_debut',
        'date_fin'
    ];
    protected $casts = [
        'date_debut'=>'date',
        'date_fin'=>'date'
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
