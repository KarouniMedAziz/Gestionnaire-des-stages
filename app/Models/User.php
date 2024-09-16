<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'UserID';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        
        'name',
        'email',
        'phone',
        'role',
        'password',
    ];

    public function administrateur()
    {
        return $this->hasOne(Administrateur::class, 'userID');
    }

    public function stagiaire()
    {
        return $this->hasOne(Stagiaire::class, 'userID');
    }

    public function communicationsSent()
    {
        return $this->hasMany(Communication::class, 'sender');
    }

    public function communicationsReceived()
    {
        return $this->hasMany(Communication::class, 'receiver');
    }
}
