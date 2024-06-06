<?php

namespace Genius257\Facoodle\Enums\Badge;

enum CriteriaAggregation: int
{
    /** Badge award criteria aggregation method. */
    case All = 1;
    /** Badge award criteria aggregation method. */
    case Any = 2;
}
