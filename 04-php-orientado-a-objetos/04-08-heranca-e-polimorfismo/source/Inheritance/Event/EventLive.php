<?php

namespace source\Inheritance\Event;
use source\Inheritance\Address;



class EventLive extends Event{
    private Address $address;

    public function __construct($event, \DateTime $date, $price, $vacancies, Address $address) {
        parent::__construct($event, $date, $price, $vacancies);
        $this->address = $address;
    }

    /**
     * Get the value of address
     *
     * @return Address
     */
    public function getAddress(): Address {
        return $this->address;
    }
}