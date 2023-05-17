<?php

namespace Pavlusha\Observer;

class SpamMailbox
{
    protected array $subscribers;

    public function subscribe(SubscriberInterface $subscriber): void
    {
        $this->subscribers[] = $subscriber;
    }

    public function unsubscribe(SubscriberInterface $subscriber): void
    {
        $this->subscribers = array_filter($this->subscribers, fn($item) => $item != $subscriber);
    }

    public function notifyAll($text)
    {
        foreach ($this->subscribers as $subscriber)
        {
            $subscriber->alert($text);
        }
    }

    public function subscribersCount()
    {
        echo 'Subscribers: ' . count($this->subscribers) . "\n";
    }
}
