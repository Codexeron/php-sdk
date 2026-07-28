<?php

declare(strict_types=1);

namespace Codexeron;

use Codexeron\Http\HttpClient;

class Client
{
    private Config $config;

    private HttpClient $http;

    public function __construct(Config|array $config)
    {
        if (is_array($config)) {
            $config = new Config($config);
        }

        $this->config = $config;
        $this->http = new HttpClient($config);
    }

    /**
     * Returns the SDK configuration.
     */
    public function config(): Config
    {
        return $this->config;
    }

    /**
     * Returns the internal HTTP client.
     */
    public function http(): HttpClient
    {
        return $this->http;
    }

    /**
     * Returns the current SDK version.
     */
    public function version(): string
    {
        return Version::VERSION;
    }
}
