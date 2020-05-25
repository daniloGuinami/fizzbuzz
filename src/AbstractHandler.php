<?php

namespace App;

abstract class AbstractHandler implements Handler
{
    private $proximoHandler;

    public function setProximo(Handler $handler): Handler
    {
        $this->proximoHandler = $handler;
        return $handler;
    }

    public function processar(string $request): ?string
    {
        return $this->proximoHandler ? $this->proximoHandler->processar($request) : null;
    }
}
