<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_name', 'business_email', 'business_address', 'phone',
        'district', 'postal', 'category', 'province', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
