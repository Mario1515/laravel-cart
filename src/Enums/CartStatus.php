<?php

namespace Mario1515\LaravelCart\Enums;

enum CartStatus: string
{
    case OPEN      = 'open';
    case SUBMITTED = 'submitted';
    case COMPLETED = 'completed';
    case EXPIRED   = 'expired';
}
