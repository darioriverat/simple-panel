<?php

namespace App\Jobs;

use App\Models\Country;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Placetopay\Falco\Facades\Falco;

class StoreCountryToMessageBroker implements ShouldQueue
{
    use Dispatchable;

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

    public function handle(): void
    {
        Falco::publish('countries', $this->id(), $this->event(), $this->body());
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
}
