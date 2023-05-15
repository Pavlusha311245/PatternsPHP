<?php

namespace Pavlusha\Builder;

use Pavlusha\Builder\Base\AirplaneBuilderInterface;

class AirplaneBuilder implements AirplaneBuilderInterface
{
    protected $result;

    public function __construct()
    {
        $this->result = new Airplane();
    }

    public function reset()
    {
        $this->result = new Airplane();
    }

    public function setSeats(int $number = 0)
    {
        $this->result->seats = $number;
    }

    public function setEngine()
    {
        $this->result->engine = 'Monster 3000';
    }

    public function setGPS()
    {
        $this->result->navigationSystems[] = 'GPS';
    }

    public function setBeiDou()
    {
        $this->result->navigationSystems[] = 'BeiDou';
    }

    public function setGLONASS()
    {
        $this->result->navigationSystems[] = 'GLONASS';
    }

    public function getResult(): Airplane
    {
        return $this->result;
    }
}
