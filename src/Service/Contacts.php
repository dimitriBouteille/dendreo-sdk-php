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
use Dbout\DendreoSdk\Model\ContactsDeleteRequest;

/**
 * @see https://developers.dendreo.com/#contacts
 */
class Contacts extends Service
{
    final public const ENDPOINT = 'contacts.php';

    /**
     * @param ContactFindRequest|null $request
     * @throws \Exception
     * @return array<Contact>|null
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

    /**
     * @param array<int>|int $id
     * @throws \Exception
     * @return bool
     * @see https://developers.dendreo.com/#supprimer-un-contact
     */
    public function delete(array|int $id): bool
    {
        $request = new ContactsDeleteRequest();
        $request->setId((array)$id);

        $result = $this->requestHttp(
            endpoint: self::ENDPOINT,
            method: Method::DELETE,
            queryParams: $request->toArray(),
        );

        return $result->isSuccess();
    }
}
