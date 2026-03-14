<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Service;

use CommunitySDKs\Spaceship\DTO\ContactsAttributes\Request\ReadAttributeDetailsRequest;
use CommunitySDKs\Spaceship\DTO\ContactsAttributes\Request\SaveContactAttributesRequest;
use CommunitySDKs\Spaceship\DTO\ContactsAttributes\Response\ReadAttributeDetailsResponse;
use CommunitySDKs\Spaceship\DTO\ContactsAttributes\Response\SaveContactAttributesResponse;
use CommunitySDKs\Spaceship\Exception\ContactsAttributes\ReadAttributeDetailsException;
use CommunitySDKs\Spaceship\Exception\ContactsAttributes\SaveContactAttributesException;
use CommunitySDKs\Spaceship\Http\ApiClient;

final class ContactsAttributesService
{
    public function __construct(private readonly ApiClient $apiClient)
    {
    }

    /**
     * Save contact attributes.
     */
    public function saveContactAttributes(SaveContactAttributesRequest $request): SaveContactAttributesResponse
    {
        $path = '/v1/contacts/attributes';

        $response = $this->apiClient->request(
            'PUT',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new SaveContactAttributesException(
                'API request failed for saveContactAttributes',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }

        return SaveContactAttributesResponse::fromPsrResponse($response);
    }

    /**
     * Read attribute details.
     */
    public function readAttributeDetails(ReadAttributeDetailsRequest $request): ReadAttributeDetailsResponse
    {
        $path = '/v1/contacts/attributes/' . $request->contact;

        $response = $this->apiClient->request(
            'GET',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new ReadAttributeDetailsException(
                'API request failed for readAttributeDetails',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }

        return ReadAttributeDetailsResponse::fromPsrResponse($response);
    }
}
