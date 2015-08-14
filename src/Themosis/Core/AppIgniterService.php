<?php
namespace Themosis\Core;

use Themosis\Core\IgniterService;

class AppIgniterService extends IgniterService {

    /**
     * Ignite the service.
     *
     * @return void
     */
    public function ignite()
    {
        $this->app->bindShared('app', function($app){

            return $app;

        });
    }

}
