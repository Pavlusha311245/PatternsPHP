<?php

namespace Pavlusha\ChainOfResponsibility\Middlewares;

use Pavlusha\ChainOfResponsibility\Base\Middleware;

class LowerCase extends Middleware
{
    public function handle($request)
    {
        if (!(empty($this->next))) {
            return $this->next->handle(strtolower($request));
        }
    }
}
