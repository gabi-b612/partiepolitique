<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class demandes_adhesion extends Model
{
    use HasFactory;

    protected $fillable = [
        'utilisateur_id',
        'statut',
    ];

    public function utilisateur(): BelongsTo
    {
        return $this->belongsTo(utilisateurs::class, 'utilisateur_id');
    }
}
