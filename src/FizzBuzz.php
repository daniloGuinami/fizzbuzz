<?php

namespace App;

class FizzBuzz
{
    public function start(int $inicio, int $fim, Handler $handle): void
    {
        for ($i = $inicio; $i <= $fim; $i++) {
            $result = $handle->processar($i) ?? $i;
            echo $this->prepareResult($result);
        }
    }

    private function prepareResult(string $result): string
    {
        return $result . '<br>';
    }
}
