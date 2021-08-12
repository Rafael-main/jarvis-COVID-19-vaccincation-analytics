<?php

namespace App\Models;

use App\Http\Resources\VisitedAtResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'suffix_name',
        'gender',
        'birth_month',
        'birth_day',
        'birth_year',
        'primary_phone_number',
        'secondary_phone_number',
        'is_transient',
        'user_id',
        'address_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function address()
    {
        return $this->hasOne(Address::class);
    }
    public function visitedAt()
    {
        return $this->hasOne(VisitedAt::class);
    }
}
