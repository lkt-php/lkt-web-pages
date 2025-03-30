<?php

namespace Lkt\WebPages\Enums;

class WebPageStatus
{
    const Draft = 'draft';
    const Public = 'public';
    const Scheduled = 'scheduled';
    const Confidential = 'confidential';

    const Statuses = [
        self::Draft,
        self::Public,
        self::Scheduled,
        self::Confidential,
    ];
}