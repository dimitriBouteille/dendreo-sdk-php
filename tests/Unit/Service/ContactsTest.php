<?php
/**
 * Copyright © Dimitri BOUTEILLE (https://github.com/dimitriBouteille)
 * See LICENSE.txt for license details.
 *
 * Author: Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 */

namespace Dbout\DendreoSdk\Tests\Unit\Service;

use Dbout\DendreoSdk\Model\Contact;
use Dbout\DendreoSdk\Model\ContactsCreateOrUpdateRequest;
use Dbout\DendreoSdk\Model\ContactsFindRequest;
use Dbout\DendreoSdk\Service\Contacts;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\Attributes\UsesClass;

#[CoversMethod(Contacts::class, 'delete')]
#[CoversMethod(Contacts::class, 'findById')]
#[CoversMethod(Contacts::class, 'find')]
#[CoversMethod(Contacts::class, 'createOrUpdate')]
#[CoversMethod(Contact::class, 'getIdContact')]
#[CoversMethod(Contact::class, 'getNom')]
#[CoversMethod(Contact::class, 'getPrenom')]
#[CoversMethod(Contact::class, 'getIdEntreprise')]
#[CoversMethod(Contact::class, 'getIdExterne')]
#[CoversMethod(Contact::class, 'getEmail')]
#[UsesClass(ContactsFindRequest::class)]
class ContactsTest extends ServiceTestCase
{
    /**
     * @param int|array<int> $ids
     * @throws \Throwable
     * @return void
     */
    #[TestWith([15])]
    #[TestWith([[50, 10]])]
    public function testSuccessDelete(int|array $ids): void
    {
        $curlClient = $this->createMockCurlClient(null, 200);
        $service = new Contacts($this->createMockClient($curlClient));
        $this->assertTrue($service->delete($ids));
    }

    /**
     * @throws \Throwable
     * @return void
     */
    public function testDeleteReturnsAnError(): void
    {
        $curlClient = $this->createMockCurlClient('tests/fixtures/contacts/delete-contacts-error.json', 500);
        $service = new Contacts($this->createMockClient($curlClient));

        $result = $service->delete(15);
        $this->assertFalse($result);
    }

    /**
     * @throws \Throwable
     * @return void
     */
    public function testFindById(): void
    {
        $curlClient = $this->createMockCurlClient('tests/fixtures/contacts/find-contact.json', 200);
        $service = new Contacts($this->createMockClient($curlClient));

        $contact = $service->findById(15);
        $this->assertInstanceOf(Contact::class, $contact);
        $this->assertEquals(15, $contact->getIdContact());
        $this->assertEquals('test@gmail.com', $contact->getEmail());
    }

    /**
     * @throws \Throwable
     * @return void
     */
    public function testFindByIdWithCustomRequest(): void
    {
        $curlClient = $this->createMockCurlClient('tests/fixtures/contacts/find-contact.json', 200);
        $service = new Contacts($this->createMockClient($curlClient));

        $request = $this->createPartialMock(ContactsFindRequest::class, ['set']);
        $request
            ->expects($this->once())
            ->method('set')
            ->with('id', 15);

        $contact = $service->findById(15, $request);
        $this->assertInstanceOf(Contact::class, $contact);
    }

    /**
     * @throws \Throwable
     * @return void
     */
    public function testFind(): void
    {
        $curlClient = $this->createMockCurlClient('tests/fixtures/contacts/find-contacts.json', 200);
        $service = new Contacts($this->createMockClient($curlClient));

        $contacts = $service->find();
        $this->assertIsArray($contacts);
        $this->assertCount(2, (array) $contacts);
    }

    /**
     * @throws \Throwable
     * @return void
     */
    public function testCreateOrUpdate(): void
    {
        $request = new ContactsCreateOrUpdateRequest();
        $request->setEmail('test@gmail.com');
        $request->setNom('Foster');
        $request->setPrenom('Norman');
        $request->setIdExterne('AD-02');

        $curlClient = $this->createMockCurlClient('tests/fixtures/contacts/create-contact.json', 200);
        $service = new Contacts($this->createMockClient($curlClient));

        $contact = $service->createOrUpdate($request);
        $this->assertInstanceOf(Contact::class, $contact);
        $this->assertEquals('test@gmail.com', $contact->getEmail());
        $this->assertEquals('Foster', $contact->getNom());
        $this->assertEquals('Norman', $contact->getPrenom());
        $this->assertEquals(1001, $contact->getIdContact());
        $this->assertEquals(5055, $contact->getIdEntreprise());
        $this->assertEquals('AD-02', $contact->getIdExterne());
    }
}
