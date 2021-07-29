<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Placetopay\Falco\Facades\Falco;

abstract class MessageBrokerJob implements ShouldQueue
{
    use Dispatchable;

    abstract protected function key(): string;
    abstract protected function id(): string;
    abstract protected function event(): string;

    public function handle(): void
    {
        Falco::publish($this->key(), $this->id(), $this->event(), $this->body());
    }

    protected function body(): array
    {
        return [];
    }
}
