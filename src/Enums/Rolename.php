<?php

namespace Genius257\Facoodle\Enums;

enum Rolename: int
{
    /** rolename displays - the name as defined in the role definition, localised if name empty */
    case Original = 0;
    /** rolename displays - the name as defined by a role alias at the course level, falls back to ROLENAME_ORIGINAL if alias not present */
    case Alias = 1;
    /** rolename displays - Both, like this:  Role alias (Original) */
    case Both = 2;
    /** rolename displays - the name as defined in the role definition and the shortname in brackets */
    case OriginalAndShort = 3;
    /** rolename displays - the name as defined by a role alias, in raw form suitable for editing */
    case Alias_raw = 4;
    /** rolename displays - the name is simply short role name */
    case Short = 5;
}
