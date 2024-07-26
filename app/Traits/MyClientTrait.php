<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;


trait MyClientTrait
{
    public static function bootMyClientTrait()
    {
        if (!app()->runningInConsole() && auth()->check()) {
            $isAdmin = auth()->user()->roles->contains(1)|| auth()->user()->roles->contains(4) || auth()->user()->roles->contains(5);
                 static::creating(function ($model) use ($isAdmin) {
                // Prevent admin from setting his own id - admin entries are global.
                // If required, remove the surrounding IF condition and admins will act as users
                if (!$isAdmin) {
                    $model->teacher_id = auth()->id();
                }
            });
            if (!$isAdmin) {
                static::addGlobalScope('teacher_id', function (Builder $builder) {
                    $field = sprintf('%s.%s', $builder->getQuery()->from, 'teacher_id');

                    $builder->where($field, auth()->id())->orWhereNull($field);
                });
            }
        }
    }
}
