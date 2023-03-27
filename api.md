## Table of contents
- [Creational\Builder\Desktop](#creational_builder_desktop)
- [Creational\Builder\Director](#creational_builder_director)
- [Creational\Builder\Hardware\AbstractPart](#creational_builder_hardware_abstractpart)
- [Creational\Builder\Hardware\Cpu](#creational_builder_hardware_cpu)
- [Creational\Builder\Hardware\Gpu](#creational_builder_hardware_gpu)
- [Creational\Builder\Hardware\Hdd](#creational_builder_hardware_hdd)
- [Creational\Builder\Hardware\Motherboard](#creational_builder_hardware_motherboard)
- [Creational\Builder\Hardware\Processor](#creational_builder_hardware_processor)
- [Creational\Builder\Hardware\Ram](#creational_builder_hardware_ram)
- [Creational\Builder\Hardware\Ssd](#creational_builder_hardware_ssd)
- [Creational\Builder\Hardware\Storage](#creational_builder_hardware_storage)
- [Creational\Builder\Interfaces\BuilderInterface](#creational_builder_interfaces_builderinterface)
- [Creational\Builder\Interfaces\ComputerInterface](#creational_builder_interfaces_computerinterface)
- [Creational\Builder\Interfaces\DirectorInterface](#creational_builder_interfaces_directorinterface)
- [Creational\Builder\Order](#creational_builder_order)
- [Creational\Builder\PCBuilder](#creational_builder_pcbuilder)
<hr>

<a id="creational_builder_desktop"></a>

### Class: Creational\Builder\Desktop
##### implements [Creational\Builder\Interfaces\ComputerInterface](#creational_builder_interfaces_computerinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( array $part )</em><br>Sets an element<br>Устанавливает элемент|
|public|<em><strong>getComponent</strong>( string $part ): Creational\Builder\Hardware\AbstractPart</em><br>Gets an element<br>Получает элемент|


<a id="creational_builder_director"></a>

### Class: Creational\Builder\Director
##### implements [Creational\Builder\Interfaces\DirectorInterface](#creational_builder_interfaces_directorinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>build</strong>( Creational\Builder\Interfaces\BuilderInterface $builder ): Creational\Builder\Interfaces\ComputerInterface</em><br>Assembles a computer<br>Собирает компьютер|


<a id="creational_builder_hardware_abstractpart"></a>

### Class: Creational\Builder\Hardware\AbstractPart
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( string $value )</em><br>Sets a value<br>Устанавливает значение|
|public|<em><strong>getValue</strong>(): string</em><br>Gets a value<br>Получает значение|


<a id="creational_builder_hardware_cpu"></a>

### Class: Creational\Builder\Hardware\Cpu
##### extends [Creational\Builder\Hardware\Processor](#creational_builder_hardware_processor)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( string $value )</em><br>Sets a value<br>Устанавливает значение|
|public|<em><strong>getValue</strong>(): string</em><br>Gets a value<br>Получает значение|


<a id="creational_builder_hardware_gpu"></a>

### Class: Creational\Builder\Hardware\Gpu
##### extends [Creational\Builder\Hardware\Processor](#creational_builder_hardware_processor)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( string $value )</em><br>Sets a value<br>Устанавливает значение|
|public|<em><strong>getValue</strong>(): string</em><br>Gets a value<br>Получает значение|


<a id="creational_builder_hardware_hdd"></a>

### Class: Creational\Builder\Hardware\Hdd
##### extends [Creational\Builder\Hardware\Storage](#creational_builder_hardware_storage)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( string $value )</em><br>Sets a value<br>Устанавливает значение|
|public|<em><strong>getValue</strong>(): string</em><br>Gets a value<br>Получает значение|


<a id="creational_builder_hardware_motherboard"></a>

### Class: Creational\Builder\Hardware\Motherboard
##### extends [Creational\Builder\Hardware\AbstractPart](#creational_builder_hardware_abstractpart)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( string $value )</em><br>Sets a value<br>Устанавливает значение|
|public|<em><strong>getValue</strong>(): string</em><br>Gets a value<br>Получает значение|


<a id="creational_builder_hardware_processor"></a>

### Class: Creational\Builder\Hardware\Processor
##### extends [Creational\Builder\Hardware\AbstractPart](#creational_builder_hardware_abstractpart)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( string $value )</em><br>Sets a value<br>Устанавливает значение|
|public|<em><strong>getValue</strong>(): string</em><br>Gets a value<br>Получает значение|


<a id="creational_builder_hardware_ram"></a>

### Class: Creational\Builder\Hardware\Ram
##### extends [Creational\Builder\Hardware\AbstractPart](#creational_builder_hardware_abstractpart)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( string $value )</em><br>Sets a value<br>Устанавливает значение|
|public|<em><strong>getValue</strong>(): string</em><br>Gets a value<br>Получает значение|


<a id="creational_builder_hardware_ssd"></a>

### Class: Creational\Builder\Hardware\Ssd
##### extends [Creational\Builder\Hardware\Storage](#creational_builder_hardware_storage)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( string $value )</em><br>Sets a value<br>Устанавливает значение|
|public|<em><strong>getValue</strong>(): string</em><br>Gets a value<br>Получает значение|


<a id="creational_builder_hardware_storage"></a>

### Class: Creational\Builder\Hardware\Storage
##### extends [Creational\Builder\Hardware\AbstractPart](#creational_builder_hardware_abstractpart)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( string $value )</em><br>Sets a value<br>Устанавливает значение|
|public|<em><strong>getValue</strong>(): string</em><br>Gets a value<br>Получает значение|


<a id="creational_builder_interfaces_builderinterface"></a>

### Class: Creational\Builder\Interfaces\BuilderInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>createComputer</strong>(): Creational\Builder\Interfaces\ComputerInterface</em><br>|


<a id="creational_builder_interfaces_computerinterface"></a>

### Class: Creational\Builder\Interfaces\ComputerInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>getComponent</strong>( string $part ): Creational\Builder\Hardware\AbstractPart</em><br>|


<a id="creational_builder_interfaces_directorinterface"></a>

### Class: Creational\Builder\Interfaces\DirectorInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>build</strong>( Creational\Builder\Interfaces\BuilderInterface $builder ): Creational\Builder\Interfaces\ComputerInterface</em><br>|


<a id="creational_builder_order"></a>

### Class: Creational\Builder\Order
| Visibility | Function |
|:-----------|:---------|


<a id="creational_builder_pcbuilder"></a>

### Class: Creational\Builder\PCBuilder
##### implements [Creational\Builder\Interfaces\BuilderInterface](#creational_builder_interfaces_builderinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>createComputer</strong>(): Creational\Builder\Interfaces\ComputerInterface</em><br>Assembles a computer<br>Собирает компьютер|
|private|<em><strong>setPart</strong>( Creational\Builder\Hardware\AbstractPart $part ): Creational\Builder\Interfaces\BuilderInterface</em><br>Adds a computer element<br>Добавляет элемент компьютера|
<hr>

###### created with [Rudra-Documentation-Collector](#https://github.com/Jagepard/Rudra-Documentation-Collector)
