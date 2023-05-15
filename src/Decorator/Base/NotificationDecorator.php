<?php

namespace Pavlusha\Decorator\Base;

class NotificationDecorator implements NotificationInterface
{
    public function __construct(protected NotificationInterface $notification)
    {
    }

    public function send()
    {
        $this->notification->send();
    }
}
