<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'image'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function competences(): BelongsToMany
    {
        return $this->belongsToMany(Competence::class);
    }
    public function parcoursAcademiques(): HasMany
    {
        return $this->hasMany(ParcoursAcademique::class);
    }
    public function parcoursProfessionnels(): HasMany
    {
        return $this->hasMany(ParcoursProfessionnel::class);
    }
    public function disponibilites(): HasMany
    {
        return $this->hasMany(Disponibilite::class);
    }
    public function specialite(): HasOne
    {
        return $this->hasOne(Specialite::class);
    }
    public function bio(): HasOne
    {
        return $this->hasOne(Bio::class);
    }

    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class);
    }
    public function cours()
    {
        return $this->hasMany(Cours::class);
    }
}
