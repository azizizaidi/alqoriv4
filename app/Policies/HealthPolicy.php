<?php

namespace App\Policies;

use Spatie\LaravelHealth\Models\HealthCheckResultHistoryItem;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class HealthPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('page_HealthCheckResults');
    }

    /**
     * Determine whether the user can view the model.
     */
   // public function view(User $user, HealthCheckResultHistoryItem $healthCheckResultHistoryItem): bool
   // {
    //    return $user->can('page_HealthCheckResults');
  //  }

    /**
     * Determine whether the user can create models.
     */

}
