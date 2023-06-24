<?php

namespace App\Middleware;

/**
 * Class HomeMiddleware
 *
 */

use Axm\Middlewares\BaseMiddleware;

class HomeMiddleware extends BaseMiddleware
{
    public function execute()
    {
        echo 'hola mundo';
        die();
    }
}
