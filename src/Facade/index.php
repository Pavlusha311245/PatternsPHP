<?php

namespace Pavlusha\Facade;

use Pavlusha\Decorator\Base\Notification;
use Pavlusha\Decorator\Base\NotificationDecorator;
use Pavlusha\Decorator\Decorators\MailDecorator;

require '../../vendor/autoload.php';

$data = [
    'username' => 'TestUser',
    'password' => 'SomeStrongPassword'
];

$authFacade = new Auth();
$authFacade->registerObject($data);
