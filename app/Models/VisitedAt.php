<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitedAt extends Model
{
    use HasFactory;

    protected $fillable = [
        'visitor_id',
        'establishment_id',
        'entered_at'
    ];
}
