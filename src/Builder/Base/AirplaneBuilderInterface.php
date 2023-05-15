<?php

namespace Pavlusha\Builder\Base;

interface AirplaneBuilderInterface
{
    public function reset();

    public function setSeats(int $number = 0);

    public function setEngine();

    public function setGPS();

    public function setBeiDou();
    public function setGLONASS();

    public function getResult();
}
