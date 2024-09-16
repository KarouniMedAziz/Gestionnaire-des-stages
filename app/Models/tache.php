<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tache extends Model
{
    use HasFactory;

    protected $table = 'taches'; 
    protected $primaryKey = 'taskID';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'title',
        'description',
        'startDate',
        'endDate',
        'status',
        'assigned_by',
        'accomplished_by',
    ];

    public function administrateur()
    {
        return $this->belongsTo(Administrateur::class, 'assigned_by');
    }

    public function stagiaire()
    {
        return $this->belongsTo(Stagiaire::class, 'accomplished_by');
    }
}
