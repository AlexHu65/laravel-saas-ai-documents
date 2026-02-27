<?php

namespace App\Models\Concerns;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;

trait BelongsToCompany
{

    protected static function bootBelongsToCompany() : void
    {
        static::addGlobalScope('company', function (Builder $builder) {
            if( auth()->check()) {
                $builder->where(
                    $builder->getModel()->getTable() . '.company_id',
                    auth()->user()->company_id
                );
            }
        });
    }
}
