<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArmesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArmesTable Test Case
 */
class ArmesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArmesTable
     */
    public $Armes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.armes',
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
        $config = TableRegistry::exists('Armes') ? [] : ['className' => 'App\Model\Table\ArmesTable'];
        $this->Armes = TableRegistry::get('Armes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Armes);

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
