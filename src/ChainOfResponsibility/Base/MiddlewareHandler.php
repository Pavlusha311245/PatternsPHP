<?php

namespace Pavlusha\ChainOfResponsibility\Base;

interface MiddlewareHandler
{
    public function next(MiddlewareHandler $handler);
    public function handle($request);
}
