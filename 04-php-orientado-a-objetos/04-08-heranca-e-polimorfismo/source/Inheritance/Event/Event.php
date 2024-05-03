<?php

namespace source\Inheritance\Event;

class Event
{
    private $event;
    private $date;
    private $price;
    private $register;
    protected $vacancies;


    public function __construct($event, \DateTime $date, $price, $vacancies)
    {
        $this->event = $event;
        $this->date = $date;
        $this->price = $price;
        $this->vacancies = $vacancies;
    }

    public function register($fullName, $email)
    {
        if ($this->vacancies >= 1) {
            $this->vacancies--;
            $this->setRegister($fullName, $email);
            echo "<p class='trigger accept'>Parabéns {$fullName}, vaga garantida!</p>";
        } else {
            echo "<p class='trigger error'>Desculpe {$fullName}, mas as vagas esgotaram!</p>";
        }
    }

    protected function setRegister($fullName, $email): void
    {
        $this->register = [
            "name" => $fullName,
            "email" => $email
        ];
    }

    public function getEvent()
    {
        return $this->event;
    }

    public function setEvent($event): self
    {
        $this->event = $event;
        return $this;
    }

    public function getDate()
    {
        return $this->date->format("d/m/Y H:i");
    }

    public function setDate($date): self
    {
        $this->date = $date;
        return $this;
    }

    public function getPrice()
    {
        return number_format($this->price, 2, ".", ",");
    }

    public function setPrice($price): self
    {
        $this->price = $price;
        return $this;
    }

    public function getRegister()
    {
        return $this->register;
    }

    public function getVacancies()
    {
        return $this->vacancies;
    }

    public function setVacancies($vacancies): self
    {
        $this->vacancies = $vacancies;
        return $this;
    }
}
