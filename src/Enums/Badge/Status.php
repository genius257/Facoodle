<?php

namespace Genius257\Facoodle\Enums\Badge;

enum Status: int
{
    /** Inactive badge means that this badge cannot be earned and has not been awarded yet. Its award criteria can be changed. */
    case Inactive = 0;
    /** Active badge means that this badge can we earned, but it has not been awarded yet. Can be deactivated for the purpose of changing its criteria. */
    case Active = 1;
    /** Inactive badge can no longer be earned, but it has been awarded in the past and therefore its criteria cannot be changed. */
    case InactiveLocked = 2;
    /** Active badge means that it can be earned and has already been awarded to users. Its criteria cannot be changed any more. */
    case ActiveLocked = 3;
    /** Archived badge is considered deleted and can no longer be earned and is not displayed in the list of all badges. */
    case Archived = 4;
}
