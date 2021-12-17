<?php
/* This file has been prefixed by <PHP-Prefixer> for "Prefixed Illuminate package" */

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PPP_L8\Carbon\Exceptions;

use BadMethodCallException as BaseBadMethodCallException;
use Exception;

class BadFluentSetterException extends BaseBadMethodCallException implements BadMethodCallException
{
    /**
     * Constructor.
     *
     * @param string         $method
     * @param int            $code
     * @param Exception|null $previous
     */
    public function __construct($method, $code = 0, Exception $previous = null)
    {
        parent::__construct(sprintf("Unknown fluent setter '%s'", $method), $code, $previous);
    }
}
