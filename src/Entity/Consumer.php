<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\ValueObject\Address;
use Centrobill\Sdk\ValueObject\BrowserAcceptHeader;
use Centrobill\Sdk\ValueObject\BrowserColorDepth;
use Centrobill\Sdk\ValueObject\BrowserLanguage;
use Centrobill\Sdk\ValueObject\BrowserScreenHeight;
use Centrobill\Sdk\ValueObject\BrowserScreenWidth;
use Centrobill\Sdk\ValueObject\BrowserTimezone;
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
use DateTimeImmutable;

class Consumer
{
    /**
     * @var ?Id $id
     */
    private ?Id $id;

    /**
     * @var ?ExternalId $externalId
     */
    private ?ExternalId $externalId;

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
     * @var ?Phone $phone
     */
    private ?Phone $phone;

    /**
     * @var ?Country $country
     */
    private ?Country $country;

    /**
     * @var ?State $state
     */
    private ?State $state;

    /**
     * @var ?City $city
     */
    private ?City $city;

    /**
     * @var ?Address $address
     */
    private ?Address $address;

    /**
     * @var ?Zip $zip
     */
    private ?Zip $zip;

    /**
     * @var ?Ip $ip
     */
    private ?Ip $ip;

    /**
     * @var ?UserAgent $userAgent
     */
    private ?UserAgent $userAgent;

    /**
     * @var ?DeviceId $deviceId
     */
    private ?DeviceId $deviceId;

    /**
     * @var ?BrowserAcceptHeader $browserAcceptHeader
     */
    private ?BrowserAcceptHeader $browserAcceptHeader;

    /**
     * @var ?bool $browserJavaEnabled
     */
    private $browserJavaEnabled;

    /**
     * @var ?BrowserLanguage $browserLanguage
     */
    private ?BrowserLanguage $browserLanguage;

    /**
     * @var ?BrowserColorDepth $browserColorDepth
     */
    private ?BrowserColorDepth $browserColorDepth;

    /**
     * @var ?BrowserScreenHeight $browserScreenHeight
     */
    private ?BrowserScreenHeight $browserScreenHeight;

    /**
     * @var ?BrowserScreenWidth $browserScreenWidth
     */
    private ?BrowserScreenWidth $browserScreenWidth;

    /**
     * @var ?BrowserTimezone $browserTimezone
     */
    private ?BrowserTimezone $browserTimezone;

    public function __construct(
        ?Id $id = null,
        ?ExternalId $externalId = null,
        ?Email $email = null,
        ?FirstName $firstName = null,
        ?LastName $lastName = null,
        ?DateTimeImmutable $birthday = null,
        ?Phone $phone = null,
        ?Country $country = null,
        ?State $state = null,
        ?City $city = null,
        ?Address $address = null,
        ?Zip $zip = null,
        ?Ip $ip = null,
        ?UserAgent $userAgent = null,
        ?DeviceId $deviceId = null,
        ?BrowserAcceptHeader $browserAcceptHeader = null,
        $browserJavaEnabled = false,
        ?BrowserLanguage $browserLanguage = null,
        ?BrowserColorDepth $browserColorDepth = null,
        ?BrowserScreenHeight $browserScreenHeight = null,
        ?BrowserScreenWidth $browserScreenWidth = null,
        ?BrowserTimezone $browserTimezone = null
    ) {
        $this->id = $id;
        $this->externalId = $externalId;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthday = $birthday;
        $this->phone = $phone;
        $this->country = $country;
        $this->state = $state;
        $this->city = $city;
        $this->address = $address;
        $this->zip = $zip;
        $this->ip = $ip;
        $this->userAgent = $userAgent;
        $this->deviceId = $deviceId;
        $this->browserAcceptHeader = $browserAcceptHeader;
        $this->browserJavaEnabled = $browserJavaEnabled;
        $this->browserLanguage = $browserLanguage;
        $this->browserColorDepth = $browserColorDepth;
        $this->browserScreenHeight = $browserScreenHeight;
        $this->browserScreenWidth = $browserScreenWidth;
        $this->browserTimezone = $browserTimezone;
    }

    public function setId(Id $id)
    {
        $this->id = $id;
        return $this;
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

    public function setBirthday(DateTimeImmutable $birthday)
    {
        $this->birthday = $birthday;
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

    public function setAddress(Address $address)
    {
        $this->address = $address;
        return $this;
    }

    public function setZip(Zip $zip)
    {
        $this->zip = $zip;
        return $this;
    }

    public function setIp(Ip $ip)
    {
        $this->ip = $ip;
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

    public function setBrowserAcceptHeader(BrowserAcceptHeader $browserAcceptHeader)
    {
        $this->browserAcceptHeader = $browserAcceptHeader;
        return $this;
    }

    public function setBrowserJavaEnabled($browserJavaEnabled)
    {
        $this->browserJavaEnabled = $browserJavaEnabled;
        return $this;
    }

    public function setBrowserLanguage(BrowserLanguage $browserLanguage)
    {
        $this->browserLanguage = $browserLanguage;
        return $this;
    }

    public function setBrowserColorDepth(BrowserColorDepth $browserColorDepth)
    {
        $this->browserColorDepth = $browserColorDepth;
        return $this;
    }

    public function setBrowserScreenHeight(BrowserScreenHeight $browserScreenHeight)
    {
        $this->browserScreenHeight = $browserScreenHeight;
        return $this;
    }

    public function setBrowserScreenWidth(BrowserScreenWidth $browserScreenWidth)
    {
        $this->browserScreenWidth = $browserScreenWidth;
        return $this;
    }

    public function setBrowserTimezone(BrowserTimezone $browserTimezone)
    {
        $this->browserTimezone = $browserTimezone;
        return $this;
    }

    public function toArray()
    {
        $data = [];

        if ($this->id !== null) {
            $data['id'] = (string)$this->id;
        }

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

        if ($this->birthday !== null) {
            $data['birthday'] = $this->birthday->format('Y-m-d');
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

        if ($this->address !== null) {
            $data['address'] = (string)$this->address;
        }

        if ($this->zip !== null) {
            $data['zip'] = (string)$this->zip;
        }

        if ($this->ip !== null) {
            $data['ip'] = (string)$this->ip;
        }

        if ($this->userAgent !== null) {
            $data['userAgent'] = (string)$this->userAgent;
        }

        if ($this->deviceId !== null) {
            $data['deviceId'] = (string)$this->deviceId;
        }

        if ($this->browserAcceptHeader !== null) {
            $data['browserAcceptHeader'] = (string)$this->browserAcceptHeader;
        }

        if ($this->browserJavaEnabled !== null) {
            $data['browserJavaEnabled'] = $this->browserJavaEnabled;
        }

        if ($this->browserLanguage !== null) {
            $data['browserLanguage'] = (string)$this->browserLanguage;
        }

        if ($this->browserColorDepth !== null) {
            $data['browserColorDepth'] = $this->browserColorDepth->getValue();
        }

        if ($this->browserScreenHeight !== null) {
            $data['browserScreenHeight'] = $this->browserScreenHeight->getValue();
        }

        if ($this->browserScreenWidth !== null) {
            $data['browserScreenWidth'] = $this->browserScreenWidth->getValue();
        }

        if ($this->browserTimezone !== null) {
            $data['browserTimezone'] = (string)$this->browserTimezone;
        }

        return $data;
    }
}
