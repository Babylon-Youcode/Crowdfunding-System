<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contries extends Model
{
    use HasFactory;
    protected $table = 'contries';

    protected $primaryKey = 'id';

    protected $fillable = [
        'code_country',
        'name_country',
    ];
}
