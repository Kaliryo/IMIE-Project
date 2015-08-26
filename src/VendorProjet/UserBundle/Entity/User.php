<?php

namespace VendorProjet\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface as UserInterface;

/**
 * @ORM\Entity(repositoryClass="VendorProjet\UserBundle\Entity\UserRepository")
 * @ORM\Table("user_symfony")
 */
class User implements UserInterface
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="username", type="string", length=255, unique=true)
   */
  private $username;

  /**
   * @ORM\Column(name="password", type="string", length=255)
   */
  private $password;

  /**
   * @ORM\Column(name="salt", type="string", length=255)
   */
  private $salt;

  /**
   * @ORM\Column(name="roles", type="array")
   */
  private $roles = array();

  // Les getters et setters

  public function eraseCredentials()
  {

  }

  public function getRoles()
  {

  }

  public function getPassword()
  {

  }

  public function getSalt()
  {
    
  }

  public function getUsername()
  {
    
  }

  public function setUsername($name)
  {
    $username = $name;
  }

  public function setPassword($pwd)
  {
    $password = $pwd;
  }

}