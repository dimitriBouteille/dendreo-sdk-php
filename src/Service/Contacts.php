<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Service;

use Dbout\DendreoSdk\Enum\Method;
use Dbout\DendreoSdk\Helper\Formatter;
use Dbout\DendreoSdk\Model\Contact;
use Dbout\DendreoSdk\Model\ContactFindRequest;

/**
 * @see https://developers.dendreo.com/#contacts
 */
class Contacts extends Service
{
    final public const ENDPOINT = 'contacts.php';

    /**
     * @param ContactFindRequest|null $request
     * @throws \Exception
     * @return array|null
     * @see https://developers.dendreo.com/#lister-tous-les-contacts
     */
    public function find(?ContactFindRequest $request = null): ?array
    {
        $result = $this->requestHttp(
            endpoint: self::ENDPOINT,
            method: Method::GET,
            queryParams: $request?->toArray(),
        );

        return $this->deserialize($result, Formatter::toArrayClass(Contact::class));
    }

    /**
     * @param int $id
     * @param ContactFindRequest|null $request
     * @throws \Exception
     * @return Contact|null
     * @see https://developers.dendreo.com/#afficher-un-contact
     */
    public function findById(int $id, ?ContactFindRequest $request = null): ?Contact
    {
        $request ??= new ContactFindRequest();
        $request->set('id', $id);

        $result = $this->requestHttp(
            endpoint: self::ENDPOINT,
            method: Method::GET,
            queryParams: $request->toArray(),
        );

        return $this->deserialize($result, Contact::class);
    }
}
