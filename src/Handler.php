<?php

namespace App;

interface Handler
{
    public function setProximo(Handler $handler): Handler;

    public function processar(string $request): ?string;
}
