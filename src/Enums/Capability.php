<?php

namespace Genius257\Facoodle\Enums;

enum Capability: int
{
    /** No capability change */
    case Inherit = 0;
    /** Allow permission, overrides CAP_PREVENT defined in parent contexts */
    case Allow = 1;
    /** Prevent permission, overrides CAP_ALLOW defined in parent contexts */
    case Prevent = -1;
    /** Prohibit permission, overrides everything in current and child contexts */
    case Prohibit = -1000;
}
