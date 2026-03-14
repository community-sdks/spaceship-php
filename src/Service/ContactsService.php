<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Service;

use CommunitySDKs\Spaceship\DTO\Contacts\Request\ReadDetailsRequest;
use CommunitySDKs\Spaceship\DTO\Contacts\Request\SaveDetailsRequest;
use CommunitySDKs\Spaceship\DTO\Contacts\Response\ReadDetailsResponse;
use CommunitySDKs\Spaceship\DTO\Contacts\Response\SaveDetailsResponse;
use CommunitySDKs\Spaceship\Exception\Contacts\ReadDetailsException;
use CommunitySDKs\Spaceship\Exception\Contacts\SaveDetailsException;
use CommunitySDKs\Spaceship\Http\ApiClient;

final class ContactsService
{
    public function __construct(private readonly ApiClient $apiClient)
    {
    }

    /**
     * Save contact details.
     */
    public function saveDetails(SaveDetailsRequest $request): SaveDetailsResponse
    {
        $path = '/v1/contacts';

        $response = $this->apiClient->request(
            'PUT',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new SaveDetailsException(
                'API request failed for saveDetails',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }

        return SaveDetailsResponse::fromPsrResponse($response);
    }

    /**
     * Read contact details.
     */
    public function readDetails(ReadDetailsRequest $request): ReadDetailsResponse
    {
        $path = '/v1/contacts/' . $request->contact;

        $response = $this->apiClient->request(
            'GET',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new ReadDetailsException(
                'API request failed for readDetails',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }

        return ReadDetailsResponse::fromPsrResponse($response);
    }
}
