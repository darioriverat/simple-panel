<?php

namespace App\Jobs;

use App\Models\Country;

class StoreCountryToMessageBroker extends MessageBrokerJob
{
    protected Country $country;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Country $country)
    {
        $this->country = $country;
    }

    protected function body(): array
    {
        return [
            'name' => $this->country->name,
            'numeric' => $this->country->numeric_code,
            'alpha_2' => $this->country->alpha_2_code,
            'alpha_3' => $this->country->alpha_3_code,
        ];
    }

    protected function event(): string
    {
        return 'country::created';
    }

    protected function id(): string
    {
        return $this->country->uuid;
    }

    protected function key(): string
    {
        return 'countries';
    }
}
