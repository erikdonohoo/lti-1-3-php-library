<?php

namespace Packback\Lti1p3\Interfaces;

use GuzzleHttp\Psr7\Response;

interface ILtiServiceConnector
{
    public function getAccessToken(ILtiRegistration $registration, array $scopes);

    public function makeRequest(IServiceRequest $request);

    public function getResponseBody(Response $request): ?array;

    public function makeServiceRequest(
        ILtiRegistration $registration,
        array $scopes,
        IServiceRequest $request,
        ?int $requestType = null,
        bool $shouldRetry = true
    ): array;

    public function getAll(
        ILtiRegistration $registration,
        array $scopes,
        IServiceRequest $request,
        string $key,
        ?int $requestType = null
    ): array;

    public function setDebuggingMode(bool $enable): void;
}
