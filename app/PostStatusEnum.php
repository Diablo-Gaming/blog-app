<?php

namespace App;

enum PostStatusEnum:string
{
    case DRAFT = 'draft';
    case SUBMITTED = 'submitted';
    case ACCEPTED = 'accepted';
    case REJECTED = 'rejected';
}
