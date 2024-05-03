<?php

namespace source\Contracts;

class UserAdmin extends User implements UserInterface, UserErrorInterface {
    private $error;
    private $level;
    

    public function __construct($firstName, $lastName, $email)
    {
        parent::__construct($firstName, $lastName, $email);
        $this->level = 10;
    }

    public function getError() {
        return $this->error;
    }

    public function setError($error): self {
        $this->error = $error;
        return $this;
    }
}