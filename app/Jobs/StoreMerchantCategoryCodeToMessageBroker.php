<?php

namespace App\Jobs;

use App\Models\MerchantCategoryCode;

class StoreMerchantCategoryCodeToMessageBroker extends MessageBrokerJob
{
    protected MerchantCategoryCode $merchantCategoryCode;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(MerchantCategoryCode $merchantCategoryCode)
    {
        $this->merchantCategoryCode = $merchantCategoryCode;
    }

    protected function body(): array
    {
        return [
            'name' => $this->merchantCategoryCode->code,
            'numeric' => $this->merchantCategoryCode->description,
        ];
    }

    protected function event(): string
    {
        return 'mcc::created';
    }

    protected function id(): string
    {
        return $this->merchantCategoryCode->uuid;
    }

    protected function key(): string
    {
        return 'merchant-category-codes';
    }
}
