# mypackage

Usage:

composer require e-terin/mypackage

```
<?php

require __DIR__.'/../vendor/autoload.php';

use Eterin\Mypackage\DocumentFacade;

$d = new DocumentFacade();

$d->setTitle('Mega title')

  ->setContent('Content here')

  ->setFormat('pdf')

  ->print();


