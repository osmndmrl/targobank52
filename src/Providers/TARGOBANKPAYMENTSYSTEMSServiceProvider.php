<?php

namespace TARGOBANKPAYMENTSYSTEMS\Providers;

use Plenty\Plugin\ServiceProvider;

class TARGOBANKPAYMENTSYSTEMSServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->getApplication()->register(TARGOBANKPAYMENTSYSTEMSRouteServiceProvider::class);
    }
}
