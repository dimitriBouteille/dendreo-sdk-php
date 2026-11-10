<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

declare(strict_types=1);

namespace Dbout\DendreoSdk\Tests\Unit\Exception;

use Dbout\DendreoSdk\Exception\ValidationException;
use PHPUnit\Framework\TestCase;

final class ValidationExceptionTest extends TestCase
{
    public function testErrorsByField(): void
    {
        $exception = new ValidationException('', 422, null, (string) json_encode([
            'message' => 'Cet email est déjà utilisé.',
            'errors' => [
                'email' => ['Cet email est déjà utilisé.'],
                'nom' => 'Le nom est obligatoire.',
            ],
        ]));

        self::assertSame([
            'email' => ['Cet email est déjà utilisé.'],
            'nom' => ['Le nom est obligatoire.'],
        ], $exception->getErrors());
    }

    public function testNoErrors(): void
    {
        self::assertSame([], (new ValidationException('', 422, null, '{"message": "Erreur."}'))->getErrors());
        self::assertSame([], (new ValidationException('', 422, null, 'not json'))->getErrors());
        self::assertSame([], (new ValidationException('', 422))->getErrors());
    }
}
