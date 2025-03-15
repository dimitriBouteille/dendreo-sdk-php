<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Tests\Unit;

use Dbout\DendreoSdk\Response;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversMethod(Response::class, 'isSuccess')]
#[CoversMethod(Response::class, 'getStatusCode')]
class ResponseTest extends TestCase
{
    /**
     * @param int $httpStatus
     * @return void
     */
    #[TestWith([200])]
    #[TestWith([201])]
    #[TestWith([202])]
    #[TestWith([204])]
    public function testIsSuccess(int $httpStatus): void
    {
        $response = new Response(
            statusCode: $httpStatus,
            result: [],
        );

        $this->assertTrue($response->isSuccess());
        $this->assertEquals($httpStatus, $response->getStatusCode());
    }

    /**
     * @param int $httpStatus
     * @return void
     */
    #[TestWith([401])]
    #[TestWith([404])]
    #[TestWith([500])]
    public function testIsNotSuccess(int $httpStatus): void
    {
        $response = new Response(
            statusCode: $httpStatus,
            result: [],
        );

        $this->assertFalse($response->isSuccess());
    }
}
