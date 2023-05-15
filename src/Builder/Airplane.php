<?php

namespace Pavlusha\Builder;

class Airplane
{
    public array $navigationSystems;
    public $engine;
    public int $seats;

    public function getNavigationSystems()
    {
        return $this->navigationSystems;
    }
}
