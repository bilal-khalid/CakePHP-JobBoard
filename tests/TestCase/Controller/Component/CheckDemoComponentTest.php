<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\CheckDemoComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\CheckDemoComponent Test Case
 */
class CheckDemoComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\CheckDemoComponent
     */
    public $CheckDemo;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->CheckDemo = new CheckDemoComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CheckDemo);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
