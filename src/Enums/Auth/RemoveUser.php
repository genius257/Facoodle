<?php

namespace Genius257\Facoodle\Enums\Auth;

enum RemoveUser: int
{
    case Keep = 0;
    case Suspend = 1;
    case FullDelete = 2;
}
