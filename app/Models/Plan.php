<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
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
