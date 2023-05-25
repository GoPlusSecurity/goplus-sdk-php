<?php

declare(strict_types=1);
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */
namespace Tests;

include_once './vendor/autoload.php';

use Goplus\Api\Address;
use Goplus\ErrorCode;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class AddressTest extends TestCase
{
    public function testAddressSecurity()
    {
        $res = (new Address())->addressSecurity('0xc8b759860149542a98a3eb57c14aadf59d6d89b9');
        $this->assertEquals(ErrorCode::SUCCESS, $res->getCode());
    }
}
