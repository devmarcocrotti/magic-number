<?php

namespace App\Service;


class MagicNumber {
    public function getMagicNumber(int $maxLimit = null): int
    {
        return isset($maxLimit) ? mt_rand(0, $maxLimit) : mt_rand();
    }
}
