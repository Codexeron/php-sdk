<?php

declare(strict_types=1);

namespace Codexeron\Http;

use Codexeron\Config;

class HttpClient
{
    public function __construct(
        private readonly Config $config
    ) {
    }

    public function send(Request $request): Response
    {
        // HTTP implementation will be added in future versions.

        return new Response(
            statusCode: 501,
            data: [
                'success' => false,
                'message' => 'HTTP client is not implemented yet.',
            ]
        );
    }

    public function config(): Config
    {
        return $this->config;
    }
}
