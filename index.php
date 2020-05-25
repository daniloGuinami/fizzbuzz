<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

use App\FizzBuzz;
use App\MultiploCinco;
use App\MultiploQuinze;
use App\MultiploTres;

$multiploQuinze = new MultiploQuinze;
$multiploCinco = new MultiploCinco;
$multiploTres = new MultiploTres;

$multiploQuinze
    ->setProximo($multiploCinco)
    ->setProximo($multiploTres);


(new FizzBuzz())->start(1, 100, $multiploQuinze);
