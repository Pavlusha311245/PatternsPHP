<?php

namespace Pavlusha\Decorator;

use Pavlusha\Decorator\Base\Notification;
use Pavlusha\Decorator\Base\NotificationDecorator;
use Pavlusha\Decorator\Decorators\MailDecorator;

require '../../vendor/autoload.php';

$notification = new Notification();

$baseDecorator = new NotificationDecorator($notification);
$mailDecorator = new MailDecorator($baseDecorator);
$mailDecorator->send();
