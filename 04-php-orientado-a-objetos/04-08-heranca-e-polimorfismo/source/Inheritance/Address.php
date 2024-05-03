<?php

namespace source\Inheritance;

class Address {
    private $street;
    private $number;
    private $complement;

    public function __construct($street, $number, $complement = null)
    {
        $this->street = $street;
        $this->number = $number;
        $this->complement = $complement;
    }

    public function getStreet() {
        return $this->street;
    }

    public function setStreet($street): self {
        $this->street = $street;
        return $this;
    }

    public function getNumber() {
        return $this->number;
    }

    public function setNumber($number): self {
        $this->number = $number;
        return $this;
    }

    public function getComplement() {
        return $this->complement;
    }

    public function setComplement($complement): self {
        $this->complement = $complement;
        return $this;
    }
}