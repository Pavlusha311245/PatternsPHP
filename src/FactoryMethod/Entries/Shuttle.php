<?php

namespace Pavlusha\FactoryMethod\Entries;

use Pavlusha\FactoryMethod\Base\FlyObjectInterface;

class Shuttle implements FlyObjectInterface
{

    public function fly()
    {
        echo "Shuttle start\n";
    }
}
