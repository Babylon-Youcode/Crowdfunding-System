<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class campaigns extends Model
{
    use HasFactory;
    protected $table = 'contries';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'descreption',
        'location',
        'image',
        'deadline',
        'user_id',
        'categories_id',
    ];
}
