<?php

namespace source\Database\Entity;

class UserEntity {
    private $id;
    private $first_name;
    private $last_name;
    private $mail;
    private $document;

    /**
     * Get the value of first_name
     */
    public function getFirstName() {
        return $this->first_name;
    }
}