<?php

namespace source\Traits;

trait UserTrait {
    private $user;

    public function getUser(): User {
        return $this->user;
    }

    public function setUser(User $user): void {
        $this->user = $user;
    }
}