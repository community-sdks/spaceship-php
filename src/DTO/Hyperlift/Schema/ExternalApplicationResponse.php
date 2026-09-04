<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Hyperlift\Schema;

class ExternalApplicationResponse
{
    public function __construct(
        public readonly \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationId $id,
        public readonly \CommunitySDKs\Spaceship\DTO\Hyperlift\Enum\ApplicationStatus $status,
        public readonly \CommunitySDKs\Spaceship\DTO\Hyperlift\Enum\BuildStatus $buildStatus,
        public readonly \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationPlan $plan,
        public readonly \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationDomain|null $domain,
        public readonly int|null $scale,
        public readonly \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\GitBranch|null $branch,
        public readonly \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\GithubInstallationId|null $githubInstallationId,
        public readonly \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\GithubRepositoryFullName|null $githubRepositoryFullName,
        public readonly \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\DockerfilePath|null $dockerfilePath,
        public readonly bool|null $automaticBuildEnabled,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate $createdAt,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate|null $updatedAt
    ) {

    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('id', $data) ? \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationId::fromValue($data['id']) : throw new \InvalidArgumentException("Missing required field id for ExternalApplicationResponse"),
            array_key_exists('status', $data) ? \CommunitySDKs\Spaceship\DTO\Hyperlift\Enum\ApplicationStatus::fromValue($data['status']) : throw new \InvalidArgumentException("Missing required field status for ExternalApplicationResponse"),
            array_key_exists('buildStatus', $data) ? \CommunitySDKs\Spaceship\DTO\Hyperlift\Enum\BuildStatus::fromValue($data['buildStatus']) : throw new \InvalidArgumentException("Missing required field buildStatus for ExternalApplicationResponse"),
            array_key_exists('plan', $data) ? \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationPlan::fromValue($data['plan']) : throw new \InvalidArgumentException("Missing required field plan for ExternalApplicationResponse"),
            array_key_exists('domain', $data) ? ($data['domain'] === null ? null : \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationDomain::fromValue($data['domain'])) : throw new \InvalidArgumentException("Missing required field domain for ExternalApplicationResponse"),
            array_key_exists('scale', $data) ? ($data['scale'] === null ? null : $data['scale']) : throw new \InvalidArgumentException("Missing required field scale for ExternalApplicationResponse"),
            array_key_exists('branch', $data) ? ($data['branch'] === null ? null : \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\GitBranch::fromValue($data['branch'])) : throw new \InvalidArgumentException("Missing required field branch for ExternalApplicationResponse"),
            array_key_exists('githubInstallationId', $data) ? ($data['githubInstallationId'] === null ? null : \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\GithubInstallationId::fromValue($data['githubInstallationId'])) : throw new \InvalidArgumentException("Missing required field githubInstallationId for ExternalApplicationResponse"),
            array_key_exists('githubRepositoryFullName', $data) ? ($data['githubRepositoryFullName'] === null ? null : \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\GithubRepositoryFullName::fromValue($data['githubRepositoryFullName'])) : throw new \InvalidArgumentException("Missing required field githubRepositoryFullName for ExternalApplicationResponse"),
            array_key_exists('dockerfilePath', $data) ? ($data['dockerfilePath'] === null ? null : \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\DockerfilePath::fromValue($data['dockerfilePath'])) : throw new \InvalidArgumentException("Missing required field dockerfilePath for ExternalApplicationResponse"),
            array_key_exists('automaticBuildEnabled', $data) ? ($data['automaticBuildEnabled'] === null ? null : $data['automaticBuildEnabled']) : throw new \InvalidArgumentException("Missing required field automaticBuildEnabled for ExternalApplicationResponse"),
            array_key_exists('createdAt', $data) ? \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate::fromValue($data['createdAt']) : throw new \InvalidArgumentException("Missing required field createdAt for ExternalApplicationResponse"),
            array_key_exists('updatedAt', $data) ? ($data['updatedAt'] === null ? null : \CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate::fromValue($data['updatedAt'])) : throw new \InvalidArgumentException("Missing required field updatedAt for ExternalApplicationResponse")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['id'] = $this->id->toValue();
        $data['status'] = $this->status->toValue();
        $data['buildStatus'] = $this->buildStatus->toValue();
        $data['plan'] = $this->plan->toValue();
        if ($this->domain !== null) { $data['domain'] = $this->domain->toValue(); } else { $data['domain'] = null; }
        if ($this->scale !== null) { $data['scale'] = $this->scale; } else { $data['scale'] = null; }
        if ($this->branch !== null) { $data['branch'] = $this->branch->toValue(); } else { $data['branch'] = null; }
        if ($this->githubInstallationId !== null) { $data['githubInstallationId'] = $this->githubInstallationId->toValue(); } else { $data['githubInstallationId'] = null; }
        if ($this->githubRepositoryFullName !== null) { $data['githubRepositoryFullName'] = $this->githubRepositoryFullName->toValue(); } else { $data['githubRepositoryFullName'] = null; }
        if ($this->dockerfilePath !== null) { $data['dockerfilePath'] = $this->dockerfilePath->toValue(); } else { $data['dockerfilePath'] = null; }
        if ($this->automaticBuildEnabled !== null) { $data['automaticBuildEnabled'] = $this->automaticBuildEnabled; } else { $data['automaticBuildEnabled'] = null; }
        $data['createdAt'] = $this->createdAt->toValue();
        if ($this->updatedAt !== null) { $data['updatedAt'] = $this->updatedAt->toValue(); } else { $data['updatedAt'] = null; }
        return $data;
    }
}
