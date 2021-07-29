<?php

use Placetopay\Falco\Encryption\Encrypter;
use Placetopay\Falco\Events\MessageReceived;

return [
    'encryption' => [
        'key' => env('FALCO_ENCRYPTION_KEY'),
        'cipher' => env('FALCO_ENCRYPTION_CIPHER', Encrypter::DEFAULT_CIPHER),
        'hash_algo' => env('FALCO_ENCRYPTION_HASH_ALGO', Encrypter::DEFAULT_HASH_ALGO),
    ],
    'events' => [
        'message::received' => MessageReceived::class,
    ],
    'queue' => [
        'name' => env('FALCO_QUEUE_NAME', 'test.placetopay.mpi'),
    ],
    'exchange' => [
        'name' => env('FALCO_EXCHANGE_NAME', 'amq.direct'),
    ],
    'consumer' => [
        'binding_key' => env('FALCO_CONSUMER_BINDING_KEY', '')
    ]
];
