<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

trait MultiTenantModelTraitRegistrar
{
    public static function bootMultiTenantModelTraitRegistrar()
    {
        if (!app()->runningInConsole() && auth()->check()) {
            $isAdmin = auth()->user()->roles->contains(1); // Check if user has admin role

            static::creating(function ($model) use ($isAdmin) {
                // Set created_by_id and registrar_id if not admin
                if (!$isAdmin) {
                    $model->registrar_id = auth()->id();
                    
                }
            });

            if (!$isAdmin) {
                static::addGlobalScope('registrar_id', function (Builder $builder) {
                    $field = $builder->getModel()->getTable() . '.registrar_id';
                    $builder->where($field, auth()->id())->orWhereNull($field);
                });

              
            }
        }
    }
}
