<?php

declare(strict_types=1);

namespace Codexeron;

class Config
{
    private ?string $apiKey;

    private string $baseUrl;

    private int $timeout;

    public function __construct(array $config = [])
    {
        $this->apiKey = $config['apiKey'] ?? null;

        $this->baseUrl = $config['baseUrl']
            ?? 'https://api.codexeron.com';

        $this->timeout = (int) ($config['timeout'] ?? 30);
    }

    public function apiKey(): ?string
    {
        return $this->apiKey;
    }

    public function baseUrl(): string
    {
        return rtrim($this->baseUrl, '/');
    }

    public function timeout(): int
    {
        return $this->timeout;
    }
}
