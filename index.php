<?php

require_once __DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

use \DesignPatterns\Structural\Composite\Components;

echo 'Initial Data Test';


try{

    /**
     * COMPOSITE DESIGN PATTERN
     */
//    $composite = new \DesignPatterns\Structural\Composite\Composite();
//    echo $composite->run();

    /**
     *
     * DECORATOR DESIGN PATTERN
     */

//    $decorator = new \DesignPatterns\Structural\Decorator\Decorator();
//    $decorator->run();

    /**
     *
     * FACADE DESIGN PATTERN
     */

//    $facade = new \DesignPatterns\Structural\Facade\Facade();
//    $facade->run();

    /**
     * ADAPTER DESIGN PATTERN
     */

    $adapter = new \DesignPatterns\Structural\Adapter\GatewayAdapter();
    $adapter->run();


}catch (\Exception $e)
{
    echo $e->getMessage();
}


