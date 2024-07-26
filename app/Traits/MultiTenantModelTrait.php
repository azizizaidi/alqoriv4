<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

trait MultiTenantModelTrait
{
    public static function bootMultiTenantModelTrait()
    {
        if (!app()->runningInConsole() && auth()->check()) {
            $isAdmin = auth()->user()->roles->contains(1) || auth()->user()->roles->contains(4);
           // $isRegistrar = auth()->user()->roles->contains(4); // Check if user has admin role

            static::creating(function ($model) use ($isAdmin) {
                // Set created_by_id and registrar_id if not admin
                if (!$isAdmin) {
                    $model->created_by_id = auth()->id();
                    
                }
            });

            if (!$isAdmin) {
                static::addGlobalScope('created_by_id', function (Builder $builder) {
                    $field = $builder->getModel()->getTable() . '.created_by_id';
                    $builder->where($field, auth()->id())->orWhereNull($field);
                });

              
            }
        }
    }
}
