<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_km',
        'name_en',
        'logo_url',
        'website',
        'email',
        'phone'
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_stores');
    }

}
