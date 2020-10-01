<?php

require_once __DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

use \DesignPatterns\Structural\Composite\Components;

echo 'Initial Data Test';


try{

    /**
     * STRUCTURAL DESIGN PATTERNS
     *
     */

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

//    $adapter = new \DesignPatterns\Structural\Adapter\GatewayAdapter();
//    $adapter->run();


    /**
     *
     * CREATIONAL DESIGN PATTERNS
     *
     */

    /**
     * FACTORY DESIGN PATTERN
     */
//    $factory = new \DesignPatterns\Creational\Factory\Factory();
//    $factory->run();

    /**
     * BUILDER
     */

//    $builder = new \DesignPatterns\Creational\Builder\Builder();
//    $builder->run();

    /**
     * MEDIATOR
     */

    $mediator = new \DesignPatterns\Behavioral\Mediator\Mediator();
    $mediator->run();

}catch (\Exception $e)
{
    echo $e->getMessage();
}


