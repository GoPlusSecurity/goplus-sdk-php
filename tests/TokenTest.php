<?php

declare(strict_types=1);
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */
namespace Tests;

use Goplus\Api\Token;
use Goplus\ErrorCode;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class TokenTest extends TestCase
{
    public function testTokenSecurity()
    {
        $res = (new Token())->tokenSecurity('1', ['0xa0b86991c6218b36c1d19d4a2e9eb0ce3606eb48']);
        $this->assertEquals(ErrorCode::SUCCESS, $res->getCode());
        $this->assertArrayHasKey('0xa0b86991c6218b36c1d19d4a2e9eb0ce3606eb48', $res->getResult());
    }

    public function testTokenSecurityByInvalidChainId()
    {
        $res = (new Token())->tokenSecurity('0111110', '0xa0b86991c6218b36c1d19d4a2e9eb0ce3606eb48');
        $this->assertNotEquals(ErrorCode::SUCCESS, $res->getCode());
    }
}
