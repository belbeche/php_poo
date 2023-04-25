<?php

namespace Class\Users;

use DateTime;

class User
{
    private int $id;

    public function __construct(int $id)
    {
        $this->id = rand();
    }
}
