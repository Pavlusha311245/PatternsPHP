<?php

namespace Pavlusha\ChainOfResponsibility\Middlewares;

use Pavlusha\ChainOfResponsibility\Base\Middleware;

class Trim extends Middleware
{
    public function handle($request)
    {
        if (!(empty($this->next))) {
            return $this->next->handle(trim($request));
        }
    }
}
