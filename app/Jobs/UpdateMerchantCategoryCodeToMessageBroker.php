<?php

namespace App\Jobs;

class UpdateMerchantCategoryCodeToMessageBroker extends StoreMerchantCategoryCodeToMessageBroker
{
    protected function event(): string
    {
        return 'mcc::updated';
    }
}
