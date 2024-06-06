<?php

namespace Genius257\Facoodle\Enums\Badge;

enum Type: int
{
    /** Badge type for site badges. */
    case Site = 1;
    /** Badge type for course badges. */
    case Course = 2;
}
