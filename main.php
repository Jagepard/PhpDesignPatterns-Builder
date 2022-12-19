<?php

namespace Creational\Builder;

require_once "vendor/autoload.php";

$employee = new Director();
$employee->setBuilder(new PCBuilder());
$desktop  = $employee->build();

print_r($desktop);
