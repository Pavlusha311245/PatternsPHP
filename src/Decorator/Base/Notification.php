<?php

namespace Pavlusha\Decorator\Base;

class Notification implements NotificationInterface
{

    public function send()
    {
        echo "Notification sent\n";
    }
}
