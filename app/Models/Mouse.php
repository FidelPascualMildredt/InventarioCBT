<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mouse extends Model
{
    use HasFactory;
    
    protected $table = 'mouses'; // Nombre de la tabla
    
    protected $fillable = [
        'serial_number',
        'model',
        'brand',
        'connection_type',
        'status',
        'location'
    ];

    public function equipment()
    {
        return $this->hasOne(Equipment::class, 'mouse_id');
    }
}
