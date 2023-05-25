<?php

declare(strict_types=1);
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */
namespace Tests;

use Goplus\Api\PhishingSite;
use Goplus\ErrorCode;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class PhishingSiteTest extends TestCase
{
    public function testPhishingSite()
    {
        $res = (new PhishingSite())->pushingSiteSecurity('https://xn--cm-68s.cc/');
        $this->assertEquals(ErrorCode::SUCCESS, $res->getCode());
    }
}
