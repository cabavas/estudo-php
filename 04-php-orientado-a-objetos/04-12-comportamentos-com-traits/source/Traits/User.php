<?php 

namespace source\Traits;

class User {
    private $firstName;
    private $lastName;
    private $email;

    public function __construct($firstName, $lastName, $email) {
    
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }
    

    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName): self {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName): self {
        $this->lastName = $lastName;
        return $this;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email): self {
        $this->email = $email;
        return $this;
    }
}