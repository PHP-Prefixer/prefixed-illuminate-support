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

namespace PPP_L8\Carbon\Doctrine;

use Doctrine\DBAL\Platforms\AbstractPlatform;

class CarbonType extends DateTimeType implements CarbonDoctrineType
{
    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function getName()
    {
        return 'carbon';
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function requiresSQLCommentHint(AbstractPlatform $platform)
    {
        return true;
    }
}