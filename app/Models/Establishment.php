<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    use HasFactory;

    protected $fillable = [
        'establishment_name',
        'business_permit_number',
        'establishment_type',
        'address_id'
    ];

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
