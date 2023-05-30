<?php
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */
namespace Tests;

use Goplus\Api\RugPull;
use Goplus\ErrorCode;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class RugPullTest extends TestCase
{
    /**
     * @throws \Swagger\Client\ApiException
     */
    public function testRugPullSecurity()
    {
        $res = (new RugPull())->rugPullSecurity('1', '0x6B175474E89094C44Da98b954EedeAC495271d0F');
        $this->assertEquals(ErrorCode::SUCCESS, $res->getCode());
    }
}
