<?php

declare(strict_types=1);
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */
namespace Tests;

use Goplus\Api\Dapp;
use Goplus\ErrorCode;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class DappTest extends TestCase
{
    public function testDappSecurity()
    {
        $res = (new Dapp())->dappSecurity('https://for.tube');
        $this->assertEquals(ErrorCode::SUCCESS, $res->getCode());
    }
}
