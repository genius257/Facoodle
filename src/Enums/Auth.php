<?php

namespace Genius257\Facoodle\Enums;

enum Auth: int
{
    /** Returned when the login was successful. */
    case Ok = 0;
    /** Returned when the login was unsuccessful. */
    case Fail = 1;
    /** Returned when the login was denied (a reason for AUTH_FAIL). */
    case Denied = 2;
    /** Returned when some error occurred (a reason for AUTH_FAIL). */
    case Error = 4;
}
