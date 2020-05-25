<?php

namespace App;

class MultiploCinco extends AbstractHandler
{
    const DIVISOR = 5;
    const PARSER = 'Buzz';

    public function processar(string $request): ?string
    {
        return ($request % self::DIVISOR === 0) ? self::PARSER : parent::processar($request);
    }
}
