<?php

namespace DesignPatterns\Structural\Composite\Components;

/*
File:   PasswordField.php
Date:   24.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class PasswordField
*/

use DesignPatterns\Structural\Composite\Abstracts\AbstractFieldContainer;
use DesignPatterns\Structural\Composite\Enums\InputTypes;

final class PasswordField extends InputField
{
    protected $type = InputTypes::PASSWORD;
}