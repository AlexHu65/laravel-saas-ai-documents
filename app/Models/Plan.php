<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Plan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price_mxn', 'ia_request_limit', 'user_limit', 'is_active', 'features'];

    protected $casts = [
        'features' => 'array',
    ];

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    public function companies()
    {
        return $this->hasManyThrough(Company::class, Subscription::class);
    }

   public function hasFeature(string $feature): bool
   {
        return $this->features[$feature] ?? false;
    }

}
