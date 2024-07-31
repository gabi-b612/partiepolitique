<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class utilisateurs extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'photo_profil',
        'prenom',
        'nom_postnom',
        'sexe',
        'naissance',
        'province_origine',
        'territoire_origine',
        'etudes',
        'adresse',
        'telephone',
        'email',
        'mot_de_passe',
        'role',
    ];

    protected $hidden = [
        'mot_de_passe',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function demandes(): HasOne
    {
        return $this->hasOne(demandes_adhesion::class,'utilisateur_id');
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword(): string
    {
        return $this->mot_de_passe;
    }
}
