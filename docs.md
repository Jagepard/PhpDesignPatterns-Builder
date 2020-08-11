## Table of contents

- [\Creational\Builder\Desktop](#class-creationalbuilderdesktop)
- [\Creational\Builder\PCBuilder](#class-creationalbuilderpcbuilder)
- [\Creational\Builder\Order](#class-creationalbuilderorder)
- [\Creational\Builder\Master](#class-creationalbuildermaster)
- [\Creational\Builder\Hardware\Cpu](#class-creationalbuilderhardwarecpu)
- [\Creational\Builder\Hardware\Ram](#class-creationalbuilderhardwareram)
- [\Creational\Builder\Hardware\Hdd](#class-creationalbuilderhardwarehdd)
- [\Creational\Builder\Hardware\Storage](#class-creationalbuilderhardwarestorage)
- [\Creational\Builder\Hardware\Gpu](#class-creationalbuilderhardwaregpu)
- [\Creational\Builder\Hardware\Processor](#class-creationalbuilderhardwareprocessor)
- [\Creational\Builder\Hardware\Ssd](#class-creationalbuilderhardwaressd)
- [\Creational\Builder\Hardware\AbstractPart (abstract)](#class-creationalbuilderhardwareabstractpart-abstract)
- [\Creational\Builder\Hardware\Motherboard](#class-creationalbuilderhardwaremotherboard)
- [\Creational\Builder\Interfaces\MasterInterface (interface)](#interface-creationalbuilderinterfacesmasterinterface)
- [\Creational\Builder\Interfaces\ComputerInterface (interface)](#interface-creationalbuilderinterfacescomputerinterface)
- [\Creational\Builder\Interfaces\BuilderInterface (interface)](#interface-creationalbuilderinterfacesbuilderinterface)

<hr />

### Class: \Creational\Builder\Desktop

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>array</em> <strong>$part</strong>)</strong> : <em>void</em><br /><em>Desktop constructor.</em> |
| public | <strong>getComponent(</strong><em>\string</em> <strong>$part</strong>)</strong> : <em>[\Creational\Builder\Hardware\AbstractPart](#class-creationalbuilderhardwareabstractpart-abstract)</em> |

*This class implements [\Creational\Builder\Interfaces\ComputerInterface](#interface-creationalbuilderinterfacescomputerinterface)*

<hr />

### Class: \Creational\Builder\PCBuilder

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getComputer()</strong> : <em>[\Creational\Builder\Interfaces\ComputerInterface](#interface-creationalbuilderinterfacescomputerinterface)</em> |
| public | <strong>setPart(</strong><em>[\Creational\Builder\Hardware\AbstractPart](#class-creationalbuilderhardwareabstractpart-abstract)</em> <strong>$part</strong>)</strong> : <em>[\Creational\Builder\Interfaces\BuilderInterface](#interface-creationalbuilderinterfacesbuilderinterface)</em> |

*This class implements [\Creational\Builder\Interfaces\BuilderInterface](#interface-creationalbuilderinterfacesbuilderinterface)*

<hr />

### Class: \Creational\Builder\Order

| Visibility | Function |
|:-----------|:---------|

<hr />

### Class: \Creational\Builder\Master

| Visibility | Function |
|:-----------|:---------|
| public | <strong>build()</strong> : <em>[\Creational\Builder\Interfaces\ComputerInterface](#interface-creationalbuilderinterfacescomputerinterface)</em> |
| public | <strong>getBuilder()</strong> : <em>[\Creational\Builder\Interfaces\BuilderInterface](#interface-creationalbuilderinterfacesbuilderinterface)</em> |
| public | <strong>setBuilder(</strong><em>[\Creational\Builder\Interfaces\BuilderInterface](#interface-creationalbuilderinterfacesbuilderinterface)</em> <strong>$builder</strong>)</strong> : <em>void</em> |

*This class implements [\Creational\Builder\Interfaces\MasterInterface](#interface-creationalbuilderinterfacesmasterinterface)*

<hr />

### Class: \Creational\Builder\Hardware\Cpu

| Visibility | Function |
|:-----------|:---------|

*This class extends [\Creational\Builder\Hardware\Processor](#class-creationalbuilderhardwareprocessor)*

<hr />

### Class: \Creational\Builder\Hardware\Ram

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$specification</strong>)</strong> : <em>void</em><br /><em>Ram constructor.</em> |

*This class extends [\Creational\Builder\Hardware\AbstractPart](#class-creationalbuilderhardwareabstractpart-abstract)*

<hr />

### Class: \Creational\Builder\Hardware\Hdd

| Visibility | Function |
|:-----------|:---------|

*This class extends [\Creational\Builder\Hardware\Storage](#class-creationalbuilderhardwarestorage)*

<hr />

### Class: \Creational\Builder\Hardware\Storage

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$volume</strong>)</strong> : <em>void</em><br /><em>Storage constructor.</em> |

*This class extends [\Creational\Builder\Hardware\AbstractPart](#class-creationalbuilderhardwareabstractpart-abstract)*

<hr />

### Class: \Creational\Builder\Hardware\Gpu

| Visibility | Function |
|:-----------|:---------|

*This class extends [\Creational\Builder\Hardware\Processor](#class-creationalbuilderhardwareprocessor)*

<hr />

### Class: \Creational\Builder\Hardware\Processor

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$processor</strong>)</strong> : <em>void</em><br /><em>Processor constructor.</em> |

*This class extends [\Creational\Builder\Hardware\AbstractPart](#class-creationalbuilderhardwareabstractpart-abstract)*

<hr />

### Class: \Creational\Builder\Hardware\Ssd

| Visibility | Function |
|:-----------|:---------|

*This class extends [\Creational\Builder\Hardware\Storage](#class-creationalbuilderhardwarestorage)*

<hr />

### Class: \Creational\Builder\Hardware\AbstractPart (abstract)

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>AbstractParameter constructor.</em> |
| public | <strong>getValue()</strong> : <em>string</em> |

<hr />

### Class: \Creational\Builder\Hardware\Motherboard

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$chipset</strong>)</strong> : <em>void</em><br /><em>Motherboard constructor.</em> |

*This class extends [\Creational\Builder\Hardware\AbstractPart](#class-creationalbuilderhardwareabstractpart-abstract)*

<hr />

### Interface: \Creational\Builder\Interfaces\MasterInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>build()</strong> : <em>[\Creational\Builder\Interfaces\ComputerInterface](#interface-creationalbuilderinterfacescomputerinterface)</em> |
| public | <strong>getBuilder()</strong> : <em>[\Creational\Builder\Interfaces\BuilderInterface](#interface-creationalbuilderinterfacesbuilderinterface)</em> |
| public | <strong>setBuilder(</strong><em>[\Creational\Builder\Interfaces\BuilderInterface](#interface-creationalbuilderinterfacesbuilderinterface)</em> <strong>$builder</strong>)</strong> : <em>void</em> |

<hr />

### Interface: \Creational\Builder\Interfaces\ComputerInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getComponent(</strong><em>\string</em> <strong>$part</strong>)</strong> : <em>[\Creational\Builder\Hardware\AbstractPart](#class-creationalbuilderhardwareabstractpart-abstract)</em> |

<hr />

### Interface: \Creational\Builder\Interfaces\BuilderInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getComputer()</strong> : <em>[\Creational\Builder\Interfaces\ComputerInterface](#interface-creationalbuilderinterfacescomputerinterface)</em> |
| public | <strong>setPart(</strong><em>[\Creational\Builder\Hardware\AbstractPart](#class-creationalbuilderhardwareabstractpart-abstract)</em> <strong>$part</strong>)</strong> : <em>[\Creational\Builder\Interfaces\BuilderInterface](#interface-creationalbuilderinterfacesbuilderinterface)</em> |

