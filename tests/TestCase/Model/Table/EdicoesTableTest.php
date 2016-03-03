<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EdicoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EdicoesTable Test Case
 */
class EdicoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EdicoesTable
     */
    public $Edicoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.edicoes',
        'app.comentarios',
        'app.comments',
        'app.usuarios',
        'app.authors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Edicoes') ? [] : ['className' => 'App\Model\Table\EdicoesTable'];
        $this->Edicoes = TableRegistry::get('Edicoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Edicoes);

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
