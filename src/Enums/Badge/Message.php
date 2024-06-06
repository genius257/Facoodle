<?php

namespace Genius257\Facoodle\Enums\Badge;

/** Badge messaging schedule options. */
enum Message: int
{
    case Never = 0;
    case Always = 1;
    case Daily = 2;
    case Weekly = 3;
    case Monthly = 4;
}
