<?php

namespace Pavlusha\Builder;

use Pavlusha\ChainOfResponsibility\Middlewares\LowerCase;
use Pavlusha\ChainOfResponsibility\Middlewares\Trim;

require '../../vendor/autoload.php';

$request = '    TEST2   ';

$trim = new Trim();
$lowerCase = new LowerCase();
$trim->next($lowerCase);

echo $trim->handle($request);
