<?php

namespace Modules\Payment\DTO;

class CreatePaymentDTO
{
    public function __construct(

        public int $amount,

    ){}
}

