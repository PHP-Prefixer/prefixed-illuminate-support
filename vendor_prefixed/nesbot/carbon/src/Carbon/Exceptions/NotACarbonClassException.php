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

use PPP_L8\Carbon\CarbonInterface;
use InvalidArgumentException as BaseInvalidArgumentException;
use Throwable;

class NotACarbonClassException extends BaseInvalidArgumentException implements InvalidArgumentException
{
    /**
     * The className.
     *
     * @var string
     */
    protected $className;

    /**
     * Constructor.
     *
     * @param string         $className
     * @param int            $code
     * @param Throwable|null $previous
     */
    public function __construct($className, $code = 0, Throwable $previous = null)
    {
        $this->className = $className;

        parent::__construct(sprintf('Given class does not implement %s: %s', CarbonInterface::class, $className), $code, $previous);
    }

    /**
     * Get the className.
     *
     * @return string
     */
    public function getClassName(): string
    {
        return $this->className;
    }
}
