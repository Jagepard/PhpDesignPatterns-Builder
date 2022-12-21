<?php

namespace Creational\Builder;

require_once "vendor/autoload.php";

$employee = new Director();
$desktop  = $employee->build(new PCBuilder());

print_r($desktop);
