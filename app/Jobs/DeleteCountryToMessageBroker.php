<?php

namespace App\Jobs;

class DeleteCountryToMessageBroker extends MessageBrokerJob
{
    private string $uuid;

    public function __construct(string $uuid)
    {
        $this->uuid = $uuid;
    }

    protected function event(): string
    {
       return 'country::deleted';
    }

    protected function id(): string
    {
      return $this->uuid;
    }

    protected function key(): string
    {
        return 'countries';
    }
}
