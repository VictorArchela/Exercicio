<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ModificationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ModificationsTable Test Case
 */
class ModificationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ModificationsTable
     */
    public $Modifications;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.modifications',
        'app.comments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Modifications') ? [] : ['className' => 'App\Model\Table\ModificationsTable'];
        $this->Modifications = TableRegistry::get('Modifications', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Modifications);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
