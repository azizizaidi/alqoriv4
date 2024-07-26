<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Kenepa\MultiWidget\MultiWidget;

class TabsWidget extends MultiWidget
{
    public array $widgets = [
      //  StatsOverview::class,
       // MySubmittedFeedback::class,
       // MySubscriptions::class,
    ];

  //  public function shouldPersistMultiWidgetTabsInSession(): bool
  //  {
 ////       return true;
   // }


}
