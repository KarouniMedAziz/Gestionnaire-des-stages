<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class communication extends Model
{
    use HasFactory;

    protected $table = 'communications';
    protected $primaryKey = 'messageID';
    public $incrementing = true;
    protected $keyType = 'int';


    protected $fillable = [
        'sender',
        'receiver',
        'messageContent',
        'timestamp',
    ];

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver');
    }
}
