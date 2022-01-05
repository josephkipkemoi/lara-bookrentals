<?php

namespace Modules\Balance\DTO;

class CreateBalanceDTO
{
    public function __construct(
        public int $balance,
    ){}
}

