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
 * HTTP 404: resource not found, or unknown account (`of` header).
 */
class NotFoundException extends ApiException
{
}
