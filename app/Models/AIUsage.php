<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AIUsage extends Model
{
    protected $fillable = ['company_id', 'user_id', 'tokens_used', 'type'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
