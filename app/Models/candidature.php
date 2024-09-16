<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidature extends Model
{
    use HasFactory;

    protected $table = 'candidatures';
    protected $primaryKey = 'applicationID';
    public $incrementing = true;
    protected $keyType = 'int';


    protected $fillable = [
        'stagiaire_id',
        'submissionDate',
        'status',
        'CV',
        'keywords',
    ];

    public function stagiaire()
    {
        return $this->belongsTo(Stagiaire::class, 'stagiaire_id');
    }
}
