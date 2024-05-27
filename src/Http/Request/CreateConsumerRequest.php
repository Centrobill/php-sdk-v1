<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Country;
use Centrobill\Sdk\ValueObject\Email;
use Centrobill\Sdk\ValueObject\ExternalId;
use Centrobill\Sdk\ValueObject\FirstName;
use Centrobill\Sdk\ValueObject\GroupId;
use Centrobill\Sdk\ValueObject\LastName;
use Centrobill\Sdk\ValueObject\Username;
use DateTimeImmutable;

class CreateConsumerRequest implements RequestInterface
{
    /**
     * @var ExternalId $externalId
     */
    private ExternalId $externalId;

    /**
     * @var ?Username $username
     */
    private ?Username $username;

    /**
     * @var ?Email $email
     */
    private ?Email $email;

    /**
     * @var ?FirstName $firstName
     */
    private ?FirstName $firstName;

    /**
     * @var ?LastName $lastName
     */
    private ?LastName $lastName;

    /**
     * @var ?DateTimeImmutable $birthday
     */
    private ?DateTimeImmutable $birthday;

    /**
     * @var ?Country $country
     */
    private ?Country $country;

    /**
     * @var ?GroupId $groupId
     */
    private ?GroupId $groupId;

    public function __construct(
        ExternalId $externalId,
        ?Username $username = null,
        ?Email $email = null,
        ?FirstName $firstName = null,
        ?LastName $lastName = null,
        ?DateTimeImmutable $birthday = null,
        ?Country $country = null,
        ?GroupId $groupId = null
    ) {
        $this->externalId = $externalId;
        $this->username = $username;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthday = $birthday;
        $this->country = $country;
        $this->groupId = $groupId;
    }

    public function setUsername(Username $username)
    {
        $this->username = $username;
        return $this;
    }

    public function setEmail(Email $email)
    {
        $this->email = $email;
        return $this;
    }

    public function setFirstName(FirstName $firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function setLastName(LastName $lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function setBirthday(DateTimeImmutable $birthday)
    {
        $this->birthday = $birthday;
        return $this;
    }

    public function setCountry(Country $country)
    {
        $this->country = $country;
        return $this;
    }

    public function setGroupId(GroupId $groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    public function getPayload(): array
    {
        $data = [
            'externalId' => (string)$this->externalId,
        ];

        if ($this->username !== null) {
            $data['username'] = (string)$this->username;
        }

        if ($this->email !== null) {
            $data['email'] = (string)$this->email;
        }

        if ($this->firstName !== null) {
            $data['firstName'] = (string)$this->firstName;
        }

        if ($this->lastName !== null) {
            $data['lastName'] = (string)$this->lastName;
        }

        if ($this->birthday !== null) {
            $data['birthday'] = $this->birthday->format('Y-m-d');
        }

        if ($this->country !== null) {
            $data['country'] = (string)$this->country;
        }

        if ($this->groupId !== null) {
            $data['groupId'] = (string)$this->groupId;
        }

        return $data;
    }

    public function getUri(): string
    {
        return 'consumer';
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_POST;
    }

    public function getHeaders(): array
    {
        return [
            'X-Requested-With' => 'XMLHttpRequest',
        ];
    }
}
