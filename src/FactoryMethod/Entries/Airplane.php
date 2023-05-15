<?php

namespace Pavlusha\FactoryMethod\Entries;

use Pavlusha\FactoryMethod\Base\FlyObjectInterface;

class Airplane implements FlyObjectInterface
{

    public function fly()
    {
        echo 'Shuttle start';
    }
}
