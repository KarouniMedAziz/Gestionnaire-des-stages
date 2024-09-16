<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stagiaire extends Model
{
    use HasFactory;

    protected $table = 'stagiaires'; 
    

    protected $fillable = [
        'userID',
        'fieldOfStudy',
        'levelOfStudy',
    ];

    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'userID');
    }

    public function candidatures()
    {
        return $this->hasMany(Candidature::class, 'stagiaire_id');
    }

    public function taches()
    {
        return $this->hasMany(Tache::class, 'accomplished_by');
    }
}
