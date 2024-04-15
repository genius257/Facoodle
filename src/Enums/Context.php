<?php

namespace Genius257\Facoodle\Enums;

enum Context: int
{
    /** System context level - only one instance in every system */
    case System = 10;
    /** User context level -  one instance for each user describing what others can do to user */
    case User = 30;
    /** Course category context level - one instance for each category */
    case Coursecat = 40;
    /** Course context level - one instances for each course */
    case Course = 50;
    /** Course module context level - one instance for each course module */
    case Module = 70;
    /**
     * Block context level - one instance for each block, sticky blocks are tricky
     * because ppl think they should be able to override them at lower contexts.
     * Any other context level instance can be parent of block context.
     */
    case Block = 80;
}
