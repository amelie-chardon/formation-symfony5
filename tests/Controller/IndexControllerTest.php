<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Functional test for the controllers defined inside BlogController.
 *
 * See https://symfony.com/doc/current/book/testing.html#functional-tests
 *
 * Execute the application tests using this command (requires PHPUnit to be installed):
 *
 *     $ cd your-symfony-project/
 *     $ ./vendor/bin/phpunit
 */
class IndexControllerTest extends WebTestCase
{
    public function testHelloWorld()
    {
        $client = static::createClient();
        $client->catchExceptions(false);
        $crawler = $client->request('GET', '/hello-world');
        $this->assertSelectorTextContains('h1', 'Hello World');
    }
    
    public function testHelloWorldWithArguments()
    {
        $client = static::createClient();
        $client->catchExceptions(false);
        $crawler = $client->request('GET', '/hello-world/zozor');
        $this->assertSelectorTextContains('h1', 'Hello zozor');

    }
}
