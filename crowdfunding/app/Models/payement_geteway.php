<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payement_geteway extends Model
{
    use HasFactory;
    protected $table = 'contries';

    protected $primaryKey = 'id';

    protected $fillable = [
        'type',
        'name',
    ];
}
