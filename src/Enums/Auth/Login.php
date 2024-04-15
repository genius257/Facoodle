<?php

namespace Genius257\Facoodle\Enums\Auth;

enum Login: int
{
    /** Login attempt successful. */
    case Ok = 0;
    /** Can not login because user does not exist. */
    case NoUser = 1;
    /** Can not login because user is suspended. */
    case Suspended = 2;
    /** Can not login, most probably password did not match. */
    case Failed = 3;
    /** Can not login because user is locked out. */
    case Lockout = 4;
    /** Can not login becauser user is not authorised. */
    case Unauthorised = 5;
}
