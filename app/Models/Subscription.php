<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = ['company_id', 'plan_id', 'status', 'starts_at', 'ends_at'];

    protected $casts = [
        'starts_at' => 'date',
        'ends_at' => 'date',
    ];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
