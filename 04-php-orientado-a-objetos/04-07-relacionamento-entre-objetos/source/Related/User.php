<?php

namespace source\Related;

class User {
    private $job;
    private $firstName;
    private $lastName;

    public function __construct($job, $firstName, $lastName) {
        $this->job = $job;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getJob() {
        return $this->job;
    }

    public function setJob($job) {
        $this->job = $job;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
        return $this;
    }
}