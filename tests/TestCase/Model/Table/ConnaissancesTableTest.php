<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConnaissancesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConnaissancesTable Test Case
 */
class ConnaissancesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ConnaissancesTable
     */
    public $Connaissances;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.connaissances',
        'app.competences',
        'app.personnages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Connaissances') ? [] : ['className' => 'App\Model\Table\ConnaissancesTable'];
        $this->Connaissances = TableRegistry::get('Connaissances', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Connaissances);

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
