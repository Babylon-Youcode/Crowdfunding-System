<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donation extends Model
{
    use HasFactory;
    protected $table = 'contries';

    protected $primaryKey = 'id';

    protected $fillable = [
        'donation',
        'payement_getway',
        'campaigns_id',
    ];
}
