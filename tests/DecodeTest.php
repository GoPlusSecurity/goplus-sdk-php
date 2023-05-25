<?php

declare(strict_types=1);
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */
namespace Goplus\Tests;

use Goplus\Api\Decode;
use Goplus\ErrorCode;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class DecodeTest extends TestCase
{
    public function testTokenSecurity()
    {
        $res = (new Decode())->signatureDataDecode('1', '0xa0712d680000000000000000000000000000000000000000000000000000000062fee481', '0x4cc8aa0c6ffbe18534584da9b592aa438733ee66');
        $this->assertEquals(ErrorCode::SUCCESS, $res->getCode());
    }
}
