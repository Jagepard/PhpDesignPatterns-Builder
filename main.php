<?php

namespace Creational\Builder;

require_once "vendor/autoload.php";

$employee = new Master();
$employee->setBuilder(new PCBuilder());
$employee->getBuilder()
    ->setPart(new Hardware\Motherboard(Order::MB))
    ->setPart(new Hardware\Cpu(Order::CPU))
    ->setPart(new Hardware\Ram(Order::RAM))
    ->setPart(new Hardware\Gpu(Order::GPU))
    ->setPart(new Hardware\Ssd(Order::SSD))
    ->setPart(new Hardware\Hdd(Order::HDD));

print_r($employee->getBuilder()->getComputer());
