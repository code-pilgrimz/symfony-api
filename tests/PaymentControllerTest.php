<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PaymentControllerTest extends WebTestCase
{
    public function testList(): void
    {
        $client = static::createClient();
        $client->request('GET', '/payments');
        $this->assertResponseIsSuccessful();
    }
}
