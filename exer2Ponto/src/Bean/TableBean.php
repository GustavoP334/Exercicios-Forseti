<?php

namespace Forseti\exer2Ponto\Bean;

trait TableBean
{
    private $user;
    private $password;

    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

}