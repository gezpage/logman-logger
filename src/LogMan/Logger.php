<?php

namespace LogMan;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class Logger
{
    /** @var Client */
    private $client;

    /** @var string */
    private $endpoint;

    /**
     * @param Client $client
     * @param string $endpoint
     */
    public function __construct(Client $client, $endpoint)
    {
        $this->client = $client;
        $this->endpoint = $endpoint;
    }

    /**
     * @param LogItem $log
     */
    public function log(LogInterface $log)
    {
        $array = $log->toArray();

        $this->client->post($this->endpoint, [
            RequestOptions::JSON => $array,
        ]);
    }
}
