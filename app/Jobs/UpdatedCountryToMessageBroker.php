<?php

namespace App\Jobs;

class UpdatedCountryToMessageBroker extends StoreCountryToMessageBroker
{
    protected function event(): string
    {
        return 'country::updated';
    }
}
