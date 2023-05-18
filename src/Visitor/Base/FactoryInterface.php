<?php

namespace Pavlusha\Visitor\Base;

interface FactoryInterface
{
    public function accept(ControlInterface $control);
}
