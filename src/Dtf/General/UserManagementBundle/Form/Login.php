<?php

namespace Dtf\General\UserManagementBundle\Form;

/**
 * Description of LoginForm
 *
 * @author psyk3hoe
 */
class Login
{
    /**
     *
     * @var string
     */
    protected $username;

    /**
     *
     * @var string
     */
    protected $password;

    /**
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     *
     * @param string
     * @throws TypeError
     */
    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    /**
     *
     * @param string $password
     * @throws TypeError
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     *
     * @param ClassMetadata $metadata
     */
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        //Validation done in PHP for error message translations
        $metadata->addPropertyConstraint('username', new Assert\NotBlank());
        $metadata->addPropertyConstraint('password', new Assert\NotBlank());
    }
}