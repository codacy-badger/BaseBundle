BaseBundle
===================
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/f895df2aed704cf482c2820ea843dadd)](https://app.codacy.com/app/Kronhyx/BaseBundle?utm_source=github.com&utm_medium=referral&utm_content=Kronhyx/BaseBundle&utm_campaign=Badge_Grade_Dashboard)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/ac7ea233-44c9-4319-ac02-103362873cbf/big.png)](https://insight.sensiolabs.com/projects/ac7ea233-44c9-4319-ac02-103362873cbf)

Este bundle genera los métodos  principales para todos los bundles que lo heredan.

----------
[![Latest Stable Version](https://poser.pugx.org/kronhyx/base-bundle/v/stable)](https://packagist.org/packages/kronhyx/base-bundle)
[![Total Downloads](https://poser.pugx.org/kronhyx/base-bundle/downloads)](https://packagist.org/packages/kronhyx/base-bundle)
[![Dependency Status](https://gemnasium.com/badges/github.com/Kronhyx/BaseBundle.svg)](https://gemnasium.com/github.com/Kronhyx/BaseBundle)
[![License](https://poser.pugx.org/kronhyx/base-bundle/license)](https://packagist.org/packages/kronhyx/base-bundle)
[![travis](https://travis-ci.org/Kronhyx/BaseBundle.svg?branch=master)](https://travis-ci.org/Kronhyx/BaseBundle)

Instalación
-------------

#### Paso 1: Descargar el Bundle

```bash
$ composer require kronhyx/base-bundle
```

Este comando requiere que usted tenga Composer instalado global, como se explica en la [documentacion de composer](https://getcomposer.org/doc/00-intro.md).


### Paso 2: Activar el Bundle

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new \Kronhyx\BaseBundle\KronhyxBaseBundle(),
        );
    }

    // ...
}
```
