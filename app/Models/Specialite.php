<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Specialite extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom'
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
