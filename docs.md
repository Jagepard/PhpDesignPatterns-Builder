## Table of contents

- [\Creational\Builder\Desktop](#class-creationalbuilderdesktop)
- [\Creational\Builder\DesktopBuilder](#class-creationalbuilderdesktopbuilder)
- [\Creational\Builder\Master](#class-creationalbuildermaster)
- [\Creational\Builder\BuilderInterface (interface)](#interface-creationalbuilderbuilderinterface)
- [\Creational\Builder\AbstractComputer (abstract)](#class-creationalbuilderabstractcomputer-abstract)

<hr />

### Class: \Creational\Builder\Desktop

> Class Desktop

| Visibility | Function |
|:-----------|:---------|

*This class extends [\Creational\Builder\AbstractComputer](#class-creationalbuilderabstractcomputer-abstract)*

<hr />

### Class: \Creational\Builder\DesktopBuilder

> Class ComputerBuilder

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addParam(</strong><em>\string</em> <strong>$key</strong>, <em>mixed</em> <strong>$value</strong>)</strong> : <em>\Creational\Builder\$this</em> |
| public | <strong>getComputer()</strong> : <em>[\Creational\Builder\AbstractComputer](#class-creationalbuilderabstractcomputer-abstract)</em> |

*This class implements [\Creational\Builder\BuilderInterface](#interface-creationalbuilderbuilderinterface)*

<hr />

### Class: \Creational\Builder\Master

> Class Director

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\Creational\Builder\BuilderInterface](#interface-creationalbuilderbuilderinterface)</em> <strong>$builder</strong>)</strong> : <em>void</em><br /><em>Master constructor.</em> |
| public | <strong>build()</strong> : <em>[\Creational\Builder\AbstractComputer](#class-creationalbuilderabstractcomputer-abstract)</em> |
| public | <strong>getBuilder()</strong> : <em>[\Creational\Builder\BuilderInterface](#interface-creationalbuilderbuilderinterface)</em> |

<hr />

### Interface: \Creational\Builder\BuilderInterface

> Interface BuilderInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addParam(</strong><em>\string</em> <strong>$key</strong>, <em>mixed</em> <strong>$value</strong>)</strong> : <em>\Creational\Builder\$this</em> |
| public | <strong>getComputer()</strong> : <em>[\Creational\Builder\AbstractComputer](#class-creationalbuilderabstractcomputer-abstract)</em> |

<hr />

### Class: \Creational\Builder\AbstractComputer (abstract)

> Class AbstractComputer

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>array</em> <strong>$params</strong>)</strong> : <em>void</em><br /><em>AbstractComputer constructor.</em> |

