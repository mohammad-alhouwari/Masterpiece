<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jeneral extends Model
{
    use HasFactory;
    protected $fillable = [
        'jeneralType',
        'title',
        'text',
        'media1',
        'mediaType1',
        'media2',
        'mediaType2',
        'media3',
        'mediaType3',
    ];
    
}
