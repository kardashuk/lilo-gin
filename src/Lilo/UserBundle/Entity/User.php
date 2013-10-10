<?php
namespace Lilo\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="lilo_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }


    /** @ORM\Column(name="facebook_id", type="string", length=255, nullable=true) */
    protected $facebook_id;

    /** @ORM\Column(name="facebook_access_token", type="string", length=255, nullable=true) */
    protected $facebook_access_token;

    /** @ORM\Column(name="linkedin_id", type="string", length=255, nullable=true) */
    protected $linkedin_id;

    /** @ORM\Column(name="linkedin_access_token", type="string", length=255, nullable=true) */
    protected $linkedin_access_token;

    /** @ORM\Column(name="twitter_id", type="string", length=255, nullable=true) */
    protected $twitter_id;

    public function setTwitterId($twitter_id)
    {
        $this->twitter_id = $twitter_id;
    }

    public function setTwitterAccessToken($twitter_access_token)
    {
        $this->twitter_access_token = $twitter_access_token;
    }

    public function getTwitterId()
    {
        return $this->twitter_id;
    }

    public function getTwitterAccessToken()
    {
        return $this->twitter_access_token;
    }

    /** @ORM\Column(name="twitter_access_token", type="string", length=255, nullable=true) */
    protected $twitter_access_token;


    public function setLinkedinAccessToken($linkedin_access_token)
    {
        $this->linkedin_access_token = $linkedin_access_token;
    }

    public function setLinkedinId($linkedin_id)
    {
        $this->linkedin_id = $linkedin_id;
    }

    public function setFacebookId($facebook_id)
    {
        $this->facebook_id = $facebook_id;
    }

    public function setFacebookAccessToken($facebook_access_token)
    {
        $this->facebook_access_token = $facebook_access_token;
    }

    public function getFacebookAccessToken()
    {
        return $this->facebook_access_token;
    }

    public function getFacebookId()
    {
        return $this->facebook_id;
    }

    public function getLinkedinAccessToken()
    {
        return $this->linkedin_access_token;
    }

    public function getLinkedinId()
    {
        return $this->linkedin_id;
    }

}