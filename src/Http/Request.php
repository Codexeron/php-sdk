<?php

declare(strict_types=1);

namespace Codexeron\Http;

class Request
{
    public function __construct(
        private readonly string $method,
        private readonly string $uri,
        private readonly array $headers = [],
        private readonly array $body = []
    ) {
    }

    public function method(): string
    {
        return $this->method;
    }

    public function uri(): string
    {
        return $this->uri;
    }

    public function headers(): array
    {
        return $this->headers;
    }

    public function body(): array
    {
        return $this->body;
    }
}
