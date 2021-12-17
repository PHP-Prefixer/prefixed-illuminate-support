<?php
/* This file has been prefixed by <PHP-Prefixer> for "Prefixed Illuminate package" */

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PPP_L8\Symfony\Component\Translation\Test;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use PPP_L8\Symfony\Component\HttpClient\MockHttpClient;
use PPP_L8\Symfony\Component\Translation\Dumper\XliffFileDumper;
use PPP_L8\Symfony\Component\Translation\Loader\LoaderInterface;
use PPP_L8\Symfony\Component\Translation\Provider\ProviderInterface;
use PPP_L8\Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * A test case to ease testing a translation provider.
 *
 * @author Mathieu Santostefano <msantostefano@protonmail.com>
 *
 * @internal
 */
abstract class ProviderTestCase extends TestCase
{
    protected HttpClientInterface $client;
    protected LoggerInterface $logger;
    protected string $defaultLocale;
    protected LoaderInterface $loader;
    protected XliffFileDumper $xliffFileDumper;

    abstract public function createProvider(HttpClientInterface $client, LoaderInterface $loader, LoggerInterface $logger, string $defaultLocale, string $endpoint): ProviderInterface;

    /**
     * @return iterable<array{0: string, 1: ProviderInterface}>
     */
    abstract public function toStringProvider(): iterable;

    /**
     * @dataProvider toStringProvider
     */
    public function testToString(ProviderInterface $provider, string $expected)
    {
        $this->assertSame($expected, (string) $provider);
    }

    protected function getClient(): MockHttpClient
    {
        return $this->client ??= new MockHttpClient();
    }

    /**
     * @return LoaderInterface&MockObject
     */
    protected function getLoader(): LoaderInterface
    {
        return $this->loader ??= $this->createMock(LoaderInterface::class);
    }

    /**
     * @return LoaderInterface&MockObject
     */
    protected function getLogger(): LoggerInterface
    {
        return $this->logger ??= $this->createMock(LoggerInterface::class);
    }

    protected function getDefaultLocale(): string
    {
        return $this->defaultLocale ??= 'en';
    }

    /**
     * @return LoaderInterface&MockObject
     */
    protected function getXliffFileDumper(): XliffFileDumper
    {
        return $this->xliffFileDumper ??= $this->createMock(XliffFileDumper::class);
    }
}
