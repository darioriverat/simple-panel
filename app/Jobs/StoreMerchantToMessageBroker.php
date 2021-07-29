<?php

namespace App\Jobs;

use App\Models\Merchant;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Placetopay\Falco\Facades\Falco;

class StoreMerchantToMessageBroker implements ShouldQueue
{
    use Dispatchable;

    private Merchant $merchant;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Merchant $merchant)
    {
        $this->merchant = $merchant;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $body = [
            'name' => $this->merchant->name,
            'brand' => $this->merchant->brand,
            'country' => $this->merchant->country->numeric_code,
            'mcc' => $this->merchant->mcc->code
        ];

        Falco::publish('test.placetopay.mpi', $this->merchant->uuid,'merchant::created', $body);
    }
}
