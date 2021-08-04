<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $table = 'comment';

    protected $primaryKey = 'id';

    protected $fillable = [
        'content',
        'campaigns_id',
        'user_id',
    ];
}
