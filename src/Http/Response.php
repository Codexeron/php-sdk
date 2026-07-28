<?php

declare(strict_types=1);

namespace Codexeron\Http;

class Response
{
    public function __construct(
        private readonly int $statusCode,
        private readonly array $data = [],
        private readonly array $headers = []
    ) {
    }

    public function statusCode(): int
    {
        return $this->statusCode;
    }

    public function data(): array
    {
        return $this->data;
    }

    public function headers(): array
    {
        return $this->headers;
    }

    public function successful(): bool
    {
        return $this->statusCode >= 200 && $this->statusCode < 300;
    }
}
