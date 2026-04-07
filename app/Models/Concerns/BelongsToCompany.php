<?php

namespace App\Models\Concerns;

use Illuminate\Database\Eloquent\Builder;

trait BelongsToCompany
{
    protected static function bootBelongsToCompany(): void
    {
        static::addGlobalScope('company', function (Builder $builder) {

            if (app()->bound('company')) {
                $builder->where(
                    $builder->getModel()->getTable() . '.company_id',
                    app('company')->id
                );
            }

        });
    }
}
