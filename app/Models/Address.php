<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = "addresses";

    protected $fillable = [
        'country',
        'province',
        'city_or_municipality',
        'barangay',
        'zipcode',
        'complete_address',
        'complete_provincial_address',
        'longitude',
        'lattitude',
    ];

    public function visitor()
    {
        return $this->belongsTo(Visitor::class);
    }
    public function establishment()
    {
        return $this->belongsTo(Establishment::class);
    }
}
