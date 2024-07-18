<?php

namespace TARGOBANKPAYMENTSYSTEMS\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class TARGOBANKPAYMENTSYSTEMSRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('targobank', 'TARGOBANKPAYMENTSYSTEMS\Controllers\TARGOBANKPAYMENTSYSTEMSController@show');
        $router->post('targobank/process', 'TARGOBANKPAYMENTSYSTEMS\Controllers\TARGOBANKPAYMENTSYSTEMSController@process');
    }
}
