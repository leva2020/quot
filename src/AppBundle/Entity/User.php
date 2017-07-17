<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /** @ORM\Column(name="facebook_id", type="string", length=255, nullable=true) */
    protected $facebook_id;

    /** @ORM\Column(name="facebook_access_token", type="string", length=255, nullable=true) */
   protected $facebook_access_token;

   /** @ORM\Column(name="google_id", type="string", length=255, nullable=true) */
   protected $google_id;

   /** @ORM\Column(name="google_access_token", type="string", length=255, nullable=true) */
   protected $google_access_token;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    public function setFacebookId($facebook_id){
      $this->facebook_id = $facebook_id;
    }

    public function setFacebookAccessToken($access_token){
      $this->facebook_access_token = $access_token;
    }

    public function setGoogleId($google_id){
      $this->google_id = $google_id;
    }

    public function setGoogleAccessToken($access_token){
      $this->google_access_token = $access_token;
    }
}