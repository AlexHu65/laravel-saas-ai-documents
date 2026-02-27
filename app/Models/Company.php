<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{

    use HasFactory;
    protected $fillable = ['name', 'slug'];


    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function activeSubscription()
    {
        return $this->hasOne(Subscription::class)->where('status', 'active');
    }

    public function currentPlan()
    {
        return $this->activeSubscription?->plan;
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    public function aiUsages()
    {
        return $this->hasMany(AIUsage::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
