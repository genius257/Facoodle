<?php

namespace Genius257\Facoodle\Enums\Auth;

/** Authentication - error codes for user confirm */
enum Confirm: int
{
    case Fail = 0;
    case Ok = 1;
    case Already = 2;
    case Error = 3;
}
