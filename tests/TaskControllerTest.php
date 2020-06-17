<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TaskControllerTest extends WebTestCase
{
    public function testList(): void
    {
        $client = static::createClient();
        $client->request('GET', '/tasks');
        $this->assertResponseIsSuccessful();
    }
}
