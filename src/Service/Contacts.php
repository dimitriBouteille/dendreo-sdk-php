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
use Dbout\DendreoSdk\Model\ContactsCreateOrUpdateRequest;
use Dbout\DendreoSdk\Model\ContactsDeleteRequest;
use Dbout\DendreoSdk\Model\ContactsFindRequest;

/**
 * @see https://developers.dendreo.com/#contacts
 */
class Contacts extends Service
{
    final public const ENDPOINT = 'contacts.php';

    /**
     * @param ContactsFindRequest|null $request
     * @throws \Exception
     * @return array<Contact>|null
     * @see https://developers.dendreo.com/#lister-tous-les-contacts
     */
    public function find(?ContactsFindRequest $request = null): ?array
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
     * @param ContactsFindRequest|null $request
     * @throws \Exception
     * @return Contact|null
     * @see https://developers.dendreo.com/#afficher-un-contact
     */
    public function findById(int $id, ?ContactsFindRequest $request = null): ?Contact
    {
        $request ??= new ContactsFindRequest();
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

    /**
     * @param ContactsCreateOrUpdateRequest $request
     * @throws \Exception
     * @return Contact|null
     * @see https://developers.dendreo.com/#ajouter-editer-un-contact
     */
    public function createOrUpdate(ContactsCreateOrUpdateRequest $request): ?Contact
    {
        $result = $this->requestHttp(
            endpoint: self::ENDPOINT,
            method: Method::POST,
            queryParams: $request->toArray(),
        );

        return $this->deserialize($result, Contact::class);
    }
}
