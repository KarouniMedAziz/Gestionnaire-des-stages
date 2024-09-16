<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class administrateur extends Model
{
    use HasFactory;

    protected $table = 'administrateurs';

    protected $fillable = [
        'userID',
    ];

    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'userID');
    }

    public function tachesAssigned()
    {
        return $this->hasMany(Tache::class, 'assigned_by');
    }
}
