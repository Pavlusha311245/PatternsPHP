<?php

namespace Pavlusha\Observer;

require '../../vendor/autoload.php';

$mailbox = new SpamMailbox();

$user = new User('Pavel');

$mailbox->subscribe($user);
$mailbox->subscribersCount();

$mailbox->notifyAll('test');

$mailbox->unsubscribe($user);
$mailbox->subscribersCount();
