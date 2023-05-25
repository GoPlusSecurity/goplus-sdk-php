<?php
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */
namespace Tests;

use Goplus\Api\Nft;
use Goplus\ErrorCode;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class NftTest extends TestCase
{
    public function testNftSecurity()
    {
        $res = (new Nft())->nftSecurity('1', '0x82f5ef9ddc3d231962ba57a9c2ebb307dc8d26c2');
        $this->assertEquals(ErrorCode::SUCCESS, $res->getCode());
    }
}
