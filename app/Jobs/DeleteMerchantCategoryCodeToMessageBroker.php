<?php

namespace App\Jobs;

class DeleteMerchantCategoryCodeToMessageBroker extends MessageBrokerJob
{
    private string $uuid;

    public function __construct(string $uuid)
    {
        $this->uuid = $uuid;
    }

    protected function event(): string
    {
        return 'mcc::deleted';
    }

    protected function id(): string
    {
        return $this->uuid;
    }

    protected function key(): string
    {
        return 'merchant-category-codes';
    }
}
