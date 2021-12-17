<?php
/* This file has been prefixed by <PHP-Prefixer> for "Prefixed Illuminate package" */

declare(strict_types=1);

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PPP_L6\Carbon\PHPStan;

if (!class_exists(LazyMacro::class, false)) {
    abstract class LazyMacro extends AbstractMacro
    {
        /**
         * {@inheritdoc}
         *
         * @return string|false
         */
        public function getFileName()
        {
            return $this->reflectionFunction->getFileName();
        }

        /**
         * {@inheritdoc}
         *
         * @return int|false
         */
        public function getStartLine()
        {
            return $this->reflectionFunction->getStartLine();
        }

        /**
         * {@inheritdoc}
         *
         * @return int|false
         */
        public function getEndLine()
        {
            return $this->reflectionFunction->getEndLine();
        }
    }
}
