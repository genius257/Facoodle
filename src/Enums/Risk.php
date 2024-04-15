<?php

namespace Genius257\Facoodle\Enums;

enum Risk: int
{
    /** Capability allow management of trusts - NOT IMPLEMENTED YET - see {@link http://docs.moodle.org/dev/Hardening_new_Roles_system} */
    case Managetrust = 0x0001;
    /** Capability allows changes in system configuration - see {@link http://docs.moodle.org/dev/Hardening_new_Roles_system} */
    case Config = 0x0002;
    /** Capability allows user to add scripted content - see {@link http://docs.moodle.org/dev/Hardening_new_Roles_system} */
    case XSS = 0x0004;
    /** Capability allows access to personal user information - see {@link http://docs.moodle.org/dev/Hardening_new_Roles_system} */
    case Personal = 0x0008;
    /** Capability allows users to add content others may see - see {@link http://docs.moodle.org/dev/Hardening_new_Roles_system} */
    case Spam = 0x0010;
    /** capability allows mass delete of data belonging to other users - see {@link http://docs.moodle.org/dev/Hardening_new_Roles_system} */
    case Dataloss = 0x0020;
}
