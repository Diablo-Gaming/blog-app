<?php

namespace App;

enum PermissionType: string
{
    case INCLUDE = 'include';
    case EXCLUDE = 'exclude';
}
