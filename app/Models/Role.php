<?php

namespace App\Models;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    const
        ADMIN = 1,
        RECEPTIONIST = 2,
        ACCOUNTANT = 3,
        HOD = 4,
        SUPERVISOR = 5,
        CUSTOMER = 6;
}
