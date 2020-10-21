<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WebhookControllerTest extends WebTestCase
{
    public function testList(): void
    {
        $client = static::createClient();
        $client->request('GET', '/webhooks');
        $this->assertResponseIsSuccessful();
    }
}
