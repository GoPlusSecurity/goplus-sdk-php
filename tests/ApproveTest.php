<?php
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */
namespace Tests;

use Goplus\Api\Approve;
use Goplus\ErrorCode;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class ApproveTest extends TestCase
{
    public function testApproveSecurityV1()
    {
        $res = (new Approve())->approveSecurityV1('1', '0xc8b759860149542a98a3eb57c14aadf59d6d89b9');
        $this->assertEquals(1, $res->getCode());
    }

    public function testTokenApproveSecurity()
    {
        $res = (new Approve())->approveSecurityV1('56', '0xd018e2b543a2669410537f96293590138cacedf3');
        $this->assertEquals(1, $res->getCode());
    }

    public function testErc721ApproveSecurity()
    {
        $res = (new Approve())->approveSecurityV1('1', '0xd95dbdab08a9fed2d71ac9c3028aac40905d8cf3');
        $this->assertEquals(1, $res->getCode());
    }

    public function testErc1155ApproveSecurityV1()
    {
        $res = (new Approve())->approveSecurityV1('56', '0xb0dccbb9c4a65a94a41a0165aaea79c8b2fc54ce');
        $this->assertEquals(ErrorCode::SUCCESS, $res->getCode());
    }
}
