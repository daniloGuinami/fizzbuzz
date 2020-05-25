<?php

namespace App;

class MultiploTres extends AbstractHandler
{
    const DIVISOR = 3;
    const PARSER = 'Fizz';

    public function processar(string $request): ?string
    {
        return ($request % self::DIVISOR === 0) ? self::PARSER : parent::processar($request);
    }
}
