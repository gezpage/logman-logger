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
    public function log(LogItem $log)
    {
        $this->client->post($this->endpoint, [
            RequestOptions::JSON => (string) $log
        ]);
    }
}
