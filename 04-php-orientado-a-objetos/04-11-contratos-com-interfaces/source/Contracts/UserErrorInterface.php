<?php

namespace source\Contracts;

interface UserErrorInterface {
    public function setError ($error);
    public function getError ();
}