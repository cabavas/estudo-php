<?php

namespace source\Qualidied;

class User
{
    private $firstName;
    private $lastName;
    private $email;

    private $error;

    public function setUser($firstName, $lastName, $email) {
        $this->setFirstName($firstName) ; 
        $this->setLastName($lastName);
        
        if(!$this->setEmail($email)) {
            $this->error = "O e-mail {$this->getEmail()} não é válido";
            return false;
        }
        return true;
    }

    

    public function getFirstName() {
        return $this->firstName;
    }

    private function setFirstName($firstName) {
        $this->firstName = filter_var($firstName, FILTER_SANITIZE_STRIPPED);
        return $this;
    }

    public function getLastName() {
        return $this->lastName;
    }

    private function setLastName($lastName) {
        $this->lastName = filter_var($lastName, FILTER_SANITIZE_STRIPPED);
        return $this;
    }

    public function getEmail() {
        return $this->email;
    }

    private function setEmail($email) {
        $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
        return $this;
    }

    public function getError() {
        return $this->error;
    }
}