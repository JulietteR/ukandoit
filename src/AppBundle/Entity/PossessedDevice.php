<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PossessedDevice
 *
 * @ORM\Table(name="possessed_device")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PossessedDeviceRepository")
 */
class PossessedDevice
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="possessedDevices")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="access_token_jawbone", type="string", length=255)
     */
    private $accessTokenJawbone;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id_withings", type="string", length=255)
     */
    private $userIdWithings;

    /**
     * @var string
     *
     * @ORM\Column(name="access_token_key_withings", type="string", length=255)
     */
    private $accessTokenKeyWithings;

    /**
     * @var string
     *
     * @ORM\Column(name="access_token_secret_withings", type="string", length=255)
     */
    private $accessTokenSecretWithings;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, unique=true)
     */
    private $url;

    /**
     * @ORM\ManyToOne(targetEntity="DeviceType")
     * @ORM\JoinColumn(name="deviceType_id", referencedColumnName="id")
     */
    private $deviceType;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return PossessedDevice
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return PossessedDevice
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return PossessedDevice
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set deviceType
     *
     * @param \AppBundle\Entity\DeviceType $deviceType
     *
     * @return PossessedDevice
     */
    public function setDeviceType(\AppBundle\Entity\DeviceType $deviceType = null)
    {
        $this->deviceType = $deviceType;

        return $this;
    }

    /**
     * Get deviceType
     *
     * @return \AppBundle\Entity\DeviceType
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * Set accessTokenJawbone
     *
     * @param string $accessTokenJawbone
     *
     * @return PossessedDevice
     */
    public function setAccessTokenJawbone($accessTokenJawbone)
    {
        $this->accessTokenJawbone = $accessTokenJawbone;

        return $this;
    }

    /**
     * Get accessTokenJawbone
     *
     * @return string
     */
    public function getAccessTokenJawbone()
    {
        return $this->accessTokenJawbone;
    }

    /**
     * Set userIdWithings
     *
     * @param string $userIdWithings
     *
     * @return PossessedDevice
     */
    public function setUserIdWithings($userIdWithings)
    {
        $this->userIdWithings = $userIdWithings;

        return $this;
    }

    /**
     * Get userIdWithings
     *
     * @return string
     */
    public function getUserIdWithings()
    {
        return $this->userIdWithings;
    }

    /**
     * Set accessTokenKeyWithings
     *
     * @param string $accessTokenKeyWithings
     *
     * @return PossessedDevice
     */
    public function setAccessTokenKeyWithings($accessTokenKeyWithings)
    {
        $this->accessTokenKeyWithings = $accessTokenKeyWithings;

        return $this;
    }

    /**
     * Get accessTokenKeyWithings
     *
     * @return string
     */
    public function getAccessTokenKeyWithings()
    {
        return $this->accessTokenKeyWithings;
    }

    /**
     * Set accessTokenSecretWithings
     *
     * @param string $accessTokenSecretWithings
     *
     * @return PossessedDevice
     */
    public function setAccessTokenSecretWithings($accessTokenSecretWithings)
    {
        $this->accessTokenSecretWithings = $accessTokenSecretWithings;

        return $this;
    }

    /**
     * Get accessTokenSecretWithings
     *
     * @return string
     */
    public function getAccessTokenSecretWithings()
    {
        return $this->accessTokenSecretWithings;
    }
}