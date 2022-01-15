<?php

namespace Modules\Contact\DTO;

class CreateContactDTO
{
    public function __construct(

        public string $name,

        public string $title,

        public string $body,

        public string $email,

        public int $mobile_number,

    ){}
}

