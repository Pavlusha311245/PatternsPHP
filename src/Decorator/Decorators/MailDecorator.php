<?php

namespace Pavlusha\Decorator\Decorators;

use Pavlusha\Decorator\Base\NotificationDecorator;

class MailDecorator extends NotificationDecorator
{
    public function send()
    {
        parent::send();
        echo "Mail sent\n";
    }
}
