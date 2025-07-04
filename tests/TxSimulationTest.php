<?php
/**
 * This file is part of GoPlus.
 *
 * @link  https://www.gopluslabs.io
 * @license https://github.com/GoPlusSecurity/goplus-sdk-php/blob/main/LICENSE
 */

use Goplus\Api\TxSimulation;
use Goplus\ErrorCode;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class TxSimulationTest extends TestCase
{
    public function testSolanaTxSimulation()
    {
        $encodedTransaction = "AT+Td4vATQ8bPgyQPt25Hp6Ve2jECOkwS3+PC5Z8HhLK/7mDbnQ8tW3sKzQnNeVWxsJzo8knzMhQZbnL+FpzVgOAAQADGuGEgGi3qMErQECfFXEVxCXlALMU02fKK0Yf27WbmN3in0h2yAJOqRM87lkKfGtIJh/K1ZeTCGy7baAOhr7lAHEGm4hX/quBhPtof2NGGMA12sQ53BrrO1WYoPAAAAAAAUHVl1rR1ll4q3QLbxXmVinsWpdivaeQV/mhOzBJCk8REfu0KcAzb3YRg2Ma9lf/OneTw5veLElNTzFqNrsDkuYLvA+xH7fegRONkq/Pv7glUQsHQHoREAxHUw9pcWEqf8JzpBDzmh14iMUco6VGUnJ5JdUmYvy9vVSA7Oxsk9U/04YFfm4JbWwLmfCCrhw+JkLOorQ/LWaR1K9ts6sVhyf7Py+Jb8E9fs7m+Yp0tE0aoYujFI/3KfPd+ElqLb+wi+bW5R6OHe4FtxpdJLGwx6Vpl5tqHI0b/JFzDt2fRX4DOIT6Ynj6mq18q+cWm0lZkVpKNXSV+WHJK0O+B/b/M7kKPU71EHDfVbbANy9N/TBkLtvrgPawBy0NzW5ehEMJ/ciXSyf8WLm80PBN0XBjIITO5GQy+w8X4b7lC5ENdeNBQtxtFaOMHuCIMKYErfMjPnIdcZyqF/E23LNm67pyWhP4BpxgdtdoBCYrCN+usbbjQi3UwAXrm0zVY6Y/BpSVhMb6evO+2606PWXzaqvJdDGxu+TC0vbg5HymAgNFL11hjqY6esn2GopdBm3ZyMw1bOMZM/i2kbQAXFV+SN+vT8Fyjbr97ysVNCK0N0ppW+uvhHyoakZ54IPbNYs9uSpZxVAe6q5A+cCehtHSM5H1lGMuCl2Xy9kJpwfYFYHGYz5CEdnDZKSvMTjkXNIUKlSiFy/yY6fNErKOUn/kfnyrpIcseSoueZv3kcqOWpwwC/t0MMF1LNOwyHxINLlxBSA55tlrnVisLQ4iM8cK+92bmKEIM7Kye02Vb0y/QKi7zQUdfHu14hsh7jlG5aOhjOg75OXUg1wpZ5pceJoVtb4l9BcMwoDLa+MZLFA4OAHPRDAYD54/hmMiOsgBBpcQ2/fVBwVKU1qZKSEGTSTocWDaOHx8NbXdvJK7geQfqEBBBUSNAwZGb+UhFzL/7K26csOb57yM5bvF9xJrLEObOkAAAAB/EQusFKXzoXRK459NkGDBTgIsPmYN/3ocys69vB4asgUXBgABAhobHAkFoIYBAAAAAAAXIhodGxwAAQMeBAIFBgcICQoYCwwNDh4DBQ8GEBESExgUFRYxAKCGAQAAAAAAjDwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABcGAAEAGhscAQYZAAkDmvYAAAAAAAAZAAUCDCsFAAEZjx9MOkUiY9QTss0X68vBoOWIc2TmJhoSqBeS6hZaPgAFAgcAAxA=";
        $res = (new TxSimulation())->solanaTxSimulation($encodedTransaction);
        $this->assertEquals(ErrorCode::SUCCESS, $res->getCode());
    }
}
