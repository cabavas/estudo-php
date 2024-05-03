<?php

namespace source\Interpretation;

class User{
    private $firstName;
    private $lastName;
    private $email;
    
    public function __construct($firstName, $lastName, $email = null) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function __clone(){
        $this->firstName = null;
        $this->lastName = null;
        echo "<p class='trigger'>Clonou!</p>";
    }

    public function __destruct(){
        echo "<p class='trigger accept'>O objeto {$this->firstName} foi destruído</p>";
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