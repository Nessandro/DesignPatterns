<?php

namespace DesignPatterns\Structural\Composite\Components;

/*
File:   TextField.php
Date:   24.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class TextField
*/

use DesignPatterns\Structural\Composite\Abstracts\AbstractFieldContainer;
use DesignPatterns\Structural\Composite\Enums\InputTypes;

final class TextField extends InputField
{
    protected $type = InputTypes::TEXT;
}