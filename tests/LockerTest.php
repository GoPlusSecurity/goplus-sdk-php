<?php
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */

use Goplus\Api\Token;
use Goplus\Api\Locker;
use Goplus\ErrorCode;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class LockerTest extends TestCase
{
    public function testLockerToken()
    {
        $res = (new Locker())->lockerToken("8453",1,100,"0x6fd0303649296360f10c07b24521deda9223086d");
        $this->assertEquals(ErrorCode::SUCCESS, $res->getCode());
    }

    public function testLockerLPV3()
    {
        $res = (new Locker())->lockerLPV3("56",1,100,"0x579df956c6cE6178fBBD78bbE4f05786cFBA9B76");
        $this->assertEquals(ErrorCode::SUCCESS, $res->getCode());
    }

}
