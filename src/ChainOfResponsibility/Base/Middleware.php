<?php

namespace Pavlusha\ChainOfResponsibility\Base;

class Middleware implements MiddlewareHandler
{
    protected MiddlewareHandler $next;

    public function next(MiddlewareHandler $handler)
    {
        $this->next = $handler;
    }

    public function handle($request)
    {
        if (!(empty($this->next))) {
            return $this->next->handle($request);
        }
    }
}
