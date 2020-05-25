<?php


namespace App;


class MultiploQuinze extends AbstractHandler
{
    const DIVISOR = 15;
    const PARSER = 'Fizz buzz';

    public function processar(string $request): ?string
    {
        return ($request % self::DIVISOR === 0) ? self::PARSER : parent::processar($request);
    }
}
