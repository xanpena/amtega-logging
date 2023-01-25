<?php

namespace Xanpena\AmtegaLogging;

use Illuminate\Log\Logger;
use Illuminate\Support\Facades\Auth;
use Monolog\Formatter\LineFormatter;

class AmtegaFormatter
{
    /**
     * Customize the given logger instance.
     *
     * @param  \Illuminate\Log\Logger  $logger
     * @return void
     */
    public function __invoke(Logger $logger)
    { 
        $user = (Auth::check()) ? Auth::user()->id : 'anonymus';

        foreach ($logger->getHandlers() as $handler) {
            $handler->setFormatter(new LineFormatter(
                "APP | " . $user . " | " . date('Y-m-d H:i:s') . " | %channel%.%level_name%: %message% %context%\n"
            ));
        }
    }
}
