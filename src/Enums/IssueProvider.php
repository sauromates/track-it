<?php

declare(strict_types=1);

namespace Sauromates\TrackIt\Enums;

enum IssueProvider: string
{
    case LOCAL = 'local';

    // Examples:
    // case REDMINE = 'redmine';
    // case GITLAB = 'gitlab';
}
