<?php

namespace Coolsam\FilamentFlatpickr;

use Carbon\Carbon;
use Carbon\CarbonInterface;
use Coolsam\FilamentFlatpickr\Enums\FlatpickrMode;

class FilamentFlatpickr
{
    public static function getPackageName(): string
    {
        return 'coolsam/flatpickr';
    }

    public static function dehydratePickerState($component, $state)
    {
        if (blank($state)) {
            return null;
        }
        if (! $state instanceof CarbonInterface) {
            if ($component->isRangePicker() || $component->getMode() === FlatpickrMode::RANGE) {
                $range = \Str::of($state)->explode(' to ');
                $state = collect($range)->map(fn ($date) => Carbon::parse($date)
                    ->setTimezone(config('app.timezone'))->format($component->getDateFormat()))
                    ->toArray();
            } elseif ($component->isMultiplePicker()) {
                $range = \Str::of($state)->explode(',');
                $state = collect($range)->map(fn ($date) => Carbon::parse($date)
                    ->setTimezone(config('app.timezone'))->format($component->getDateFormat()))
                    ->toArray();
            }
        }

        return $state;
    }
}
