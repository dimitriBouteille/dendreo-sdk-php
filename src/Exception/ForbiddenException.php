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
 * HTTP 403: the API key does not have the rights required for this resource.
 */
class ForbiddenException extends ApiException
{
}
