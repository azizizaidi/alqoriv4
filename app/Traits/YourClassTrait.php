<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;


trait YourClassTrait
{
    public static function bootYourClassTrait()
    {
        if (!app()->runningInConsole() && auth()->check()) {
            $isAdmin = auth()->user()->roles->contains(1) || auth()->user()->roles->contains(5);
                 static::creating(function ($model) use ($isAdmin) {
                // Prevent admin from setting his own id - admin entries are global.
                // If required, remove the surrounding IF condition and admins will act as users
                if (!$isAdmin) {
                    $model->registrar_id = auth()->id();
                }
            });
            if (!$isAdmin) {
                static::addGlobalScope('registrar_id', function (Builder $builder) {
                    $field = sprintf('%s.%s', $builder->getQuery()->from, 'registrar_id');

                    $builder->where($field, auth()->id())->orWhereNull($field);
                });
            }
        }
    }
}
