## Table of contents

- [\Creational\Builder\Cpu](#class-creationalbuildercpu)
- [\Creational\Builder\Ram](#class-creationalbuilderram)
- [\Creational\Builder\Desktop](#class-creationalbuilderdesktop)
- [\Creational\Builder\Hdd](#class-creationalbuilderhdd)
- [\Creational\Builder\MasterInterface (interface)](#interface-creationalbuildermasterinterface)
- [\Creational\Builder\DesktopBuilder](#class-creationalbuilderdesktopbuilder)
- [\Creational\Builder\Software](#class-creationalbuildersoftware)
- [\Creational\Builder\Gpu](#class-creationalbuildergpu)
- [\Creational\Builder\ComputerInterface (interface)](#interface-creationalbuildercomputerinterface)
- [\Creational\Builder\Master](#class-creationalbuildermaster)
- [\Creational\Builder\ParamsInterface (interface)](#interface-creationalbuilderparamsinterface)
- [\Creational\Builder\BuilderInterface (interface)](#interface-creationalbuilderbuilderinterface)
- [\Creational\Builder\Motherboard](#class-creationalbuildermotherboard)

<hr />

### Class: \Creational\Builder\Cpu

> Class Cpu

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed/\string</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>Hdd constructor.</em> |
| public | <strong>getValue()</strong> : <em>string</em> |

*This class implements [\Creational\Builder\ParamsInterface](#interface-creationalbuilderparamsinterface)*

<hr />

### Class: \Creational\Builder\Ram

> Class Ram

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed/\string</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>Hdd constructor.</em> |
| public | <strong>getValue()</strong> : <em>string</em> |

*This class implements [\Creational\Builder\ParamsInterface](#interface-creationalbuilderparamsinterface)*

<hr />

### Class: \Creational\Builder\Desktop

> Class Desktop

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>array</em> <strong>$params</strong>)</strong> : <em>void</em><br /><em>AbstractComputer constructor.</em> |

*This class implements [\Creational\Builder\ComputerInterface](#interface-creationalbuildercomputerinterface)*

<hr />

### Class: \Creational\Builder\Hdd

> Class Hdd

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed/\string</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>Hdd constructor.</em> |
| public | <strong>getValue()</strong> : <em>string</em> |

*This class implements [\Creational\Builder\ParamsInterface](#interface-creationalbuilderparamsinterface)*

<hr />

### Interface: \Creational\Builder\MasterInterface

> Interface MasterInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>build()</strong> : <em>[\Creational\Builder\ComputerInterface](#interface-creationalbuildercomputerinterface)</em> |
| public | <strong>getBuilder()</strong> : <em>[\Creational\Builder\BuilderInterface](#interface-creationalbuilderbuilderinterface)</em> |
| public | <strong>setBuilder(</strong><em>[\Creational\Builder\BuilderInterface](#interface-creationalbuilderbuilderinterface)</em> <strong>$builder</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Creational\Builder\DesktopBuilder

> Class ComputerBuilder

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getComputer()</strong> : <em>[\Creational\Builder\ComputerInterface](#interface-creationalbuildercomputerinterface)</em> |
| public | <strong>setParam(</strong><em>[\Creational\Builder\ParamsInterface](#interface-creationalbuilderparamsinterface)</em> <strong>$params</strong>)</strong> : <em>[\Creational\Builder\BuilderInterface](#interface-creationalbuilderbuilderinterface)</em> |

*This class implements [\Creational\Builder\BuilderInterface](#interface-creationalbuilderbuilderinterface)*

<hr />

### Class: \Creational\Builder\Software

> Class Software

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed/\string</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>Hdd constructor.</em> |
| public | <strong>getValue()</strong> : <em>string</em> |

*This class implements [\Creational\Builder\ParamsInterface](#interface-creationalbuilderparamsinterface)*

<hr />

### Class: \Creational\Builder\Gpu

> Class Gpu

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed/\string</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>Hdd constructor.</em> |
| public | <strong>getValue()</strong> : <em>string</em> |

*This class implements [\Creational\Builder\ParamsInterface](#interface-creationalbuilderparamsinterface)*

<hr />

### Interface: \Creational\Builder\ComputerInterface

> Interface ComputerInterface

| Visibility | Function |
|:-----------|:---------|

<hr />

### Class: \Creational\Builder\Master

> Class Director

| Visibility | Function |
|:-----------|:---------|
| public | <strong>build()</strong> : <em>[\Creational\Builder\ComputerInterface](#interface-creationalbuildercomputerinterface)</em> |
| public | <strong>getBuilder()</strong> : <em>[\Creational\Builder\BuilderInterface](#interface-creationalbuilderbuilderinterface)</em> |
| public | <strong>setBuilder(</strong><em>[\Creational\Builder\BuilderInterface](#interface-creationalbuilderbuilderinterface)</em> <strong>$builder</strong>)</strong> : <em>void</em> |

*This class implements [\Creational\Builder\MasterInterface](#interface-creationalbuildermasterinterface)*

<hr />

### Interface: \Creational\Builder\ParamsInterface

> Interface ParamInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getValue()</strong> : <em>string</em> |

<hr />

### Interface: \Creational\Builder\BuilderInterface

> Interface BuilderInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getComputer()</strong> : <em>[\Creational\Builder\ComputerInterface](#interface-creationalbuildercomputerinterface)</em> |
| public | <strong>setParam(</strong><em>[\Creational\Builder\ParamsInterface](#interface-creationalbuilderparamsinterface)</em> <strong>$params</strong>)</strong> : <em>[\Creational\Builder\BuilderInterface](#interface-creationalbuilderbuilderinterface)</em> |

<hr />

### Class: \Creational\Builder\Motherboard

> Class Motherboard

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed/\string</em> <strong>$value</strong>)</strong> : <em>void</em><br /><em>Hdd constructor.</em> |
| public | <strong>getValue()</strong> : <em>string</em> |

*This class implements [\Creational\Builder\ParamsInterface](#interface-creationalbuilderparamsinterface)*

