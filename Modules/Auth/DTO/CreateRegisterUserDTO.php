<?php

namespace Modules\Auth\DTO;

class CreateRegisterUserDTO
{
    public function __construct(
        public string $first_name,

        public string $last_name,

        public int $mobile_number,

        public int $identification_number,

        public string $password,

        public string $email,

        public string $referral_code
    )
    {}
}
