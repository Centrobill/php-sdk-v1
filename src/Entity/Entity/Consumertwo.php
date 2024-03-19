<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\ValueObject\City;
use Centrobill\Sdk\ValueObject\Country;
use Centrobill\Sdk\ValueObject\DeviceId;
use Centrobill\Sdk\ValueObject\Email;
use Centrobill\Sdk\ValueObject\ExternalId;
use Centrobill\Sdk\ValueObject\FirstName;
use Centrobill\Sdk\ValueObject\Id;
use Centrobill\Sdk\ValueObject\Ip;
use Centrobill\Sdk\ValueObject\LastName;
use Centrobill\Sdk\ValueObject\Phone;
use Centrobill\Sdk\ValueObject\State;
use Centrobill\Sdk\ValueObject\UserAgent;
use Centrobill\Sdk\ValueObject\Zip;

class Consumertwo
{
    /**
     * @var Id $id
     */
    private Id $id;

    /**
     * @var ExternalId $externalId
     */
    private ExternalId $externalId;

    /**
     * @var Email $email
     */
    private Email $email;

    /**
     * @var FirstName $firstName
     */
    private FirstName $firstName;

    /**
     * @var LastName $lastName
     */
    private LastName $lastName;

    /**
     * @var Phone $phone
     */
    private Phone $phone;

    /**
     * @var Country $country
     */
    private Country $country;

    /**
     * @var State $state
     */
    private State $state;

    /**
     * @var City $city
     */
    private City $city;

    /**
     * @var Zip $zip
     */
    private Zip $zip;

    /**
     * @var Ip $ip
     */
    private Ip $ip;

    /**
     * @var UserAgent $userAgent
     */
    private UserAgent $userAgent;

    /**
     * @var DeviceId $deviceId
     */
    private DeviceId $deviceId;

    public function __construct(
        Id $id,
        Ip $ip,
        ExternalId $externalId = null,
        Email $email = null,
        FirstName $firstName = null,
        LastName $lastName = null,
        Phone $phone = null,
        Country $country = null,
        State $state = null,
        City $city = null,
        Zip $zip = null,
        UserAgent $userAgent = null,
        DeviceId $deviceId = null,
    ) {
        $this->id = $id;
        $this->ip = $ip;
        $this->externalId = $externalId;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->country = $country;
        $this->state = $state;
        $this->city = $city;
        $this->zip = $zip;
        $this->userAgent = $userAgent;
        $this->deviceId = $deviceId;
    }

    public function setExternalId(ExternalId $externalId)
    {
        $this->externalId = $externalId;
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

    public function setPhone(Phone $phone)
    {
        $this->phone = $phone;
        return $this;
    }

    public function setCountry(Country $country)
    {
        $this->country = $country;
        return $this;
    }

    public function setState(State $state)
    {
        $this->state = $state;
        return $this;
    }

    public function setCity(City $city)
    {
        $this->city = $city;
        return $this;
    }

    public function setZip(Zip $zip)
    {
        $this->zip = $zip;
        return $this;
    }

    public function setUserAgent(UserAgent $userAgent)
    {
        $this->userAgent = $userAgent;
        return $this;
    }

    public function setDeviceId(DeviceId $deviceId)
    {
        $this->deviceId = $deviceId;
        return $this;
    }

    public function toArray()
    {
        $data = [
            'id' => (string)$this->id,
            'ip' => (string)$this->ip,
        ];

        if ($this->externalId !== null) {
            $data['externalId'] = (string)$this->externalId;
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

        if ($this->phone !== null) {
            $data['phone'] = (string)$this->phone;
        }

        if ($this->country !== null) {
            $data['country'] = (string)$this->country;
        }

        if ($this->state !== null) {
            $data['state'] = (string)$this->state;
        }

        if ($this->city !== null) {
            $data['city'] = (string)$this->city;
        }

        if ($this->zip !== null) {
            $data['zip'] = (string)$this->zip;
        }

        if ($this->userAgent !== null) {
            $data['userAgent'] = (string)$this->userAgent;
        }

        if ($this->deviceId !== null) {
            $data['deviceId'] = (string)$this->deviceId;
        }

        return $data;
    }
}
