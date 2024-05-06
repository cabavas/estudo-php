<?php

namespace source\Traits;

trait AddressTrait {
    private $address;

    public function __construct(Address $address)
    {
        $this->address = $address;
    }

    /**
     * Get the value of address
     */
    public function getAddress(): Address {
        return $this->address;
    }

    /**
     * Set the value of address
     */
    public function setAddress($address): void {
        $this->address = $address;
    }
}