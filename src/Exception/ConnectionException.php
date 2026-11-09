<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

declare(strict_types=1);

namespace Dbout\DendreoSdk\Exception;

use Dbout\DendreoSdk\ApiException;

/**
 * The API could not be reached (DNS, timeout, TLS...): no HTTP response was received.
 */
class ConnectionException extends ApiException
{
}
