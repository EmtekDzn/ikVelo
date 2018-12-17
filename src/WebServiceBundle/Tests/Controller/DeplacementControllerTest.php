<?php

namespace WebServiceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DeplacementControllerTest extends WebTestCase
{
    public function testListall()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

    public function testByuser()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/byUser');
    }

    public function testByuseryearmonth()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/byUserYearMonth');
    }

}
