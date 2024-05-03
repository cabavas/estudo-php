<?php

namespace source\Contracts;

class Login
{
    private $logged;

    /**
     * Summary of loginUser
     * @param \source\Contracts\User $user
     * @return User
     */
    public function loginUser(User $user): User
    {
        $this->logged = $user;
        return $this->logged;
    }

    /**
     * Summary of loginAdmin
     * @param \source\Contracts\User $user
     * @return User
     */
    public function loginAdmin(User $user): UserAdmin
    {
        $this->logged = $user;
        return $this->logged;
    }

    public function login(UserInterface $user): UserInterface
    {
        $this->logged = $user;
        return $this->logged;
    }
}