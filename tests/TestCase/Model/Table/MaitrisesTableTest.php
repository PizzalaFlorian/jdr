<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaitrisesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaitrisesTable Test Case
 */
class MaitrisesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MaitrisesTable
     */
    public $Maitrises;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.maitrises',
        'app.ecoles',
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
        $config = TableRegistry::exists('Maitrises') ? [] : ['className' => 'App\Model\Table\MaitrisesTable'];
        $this->Maitrises = TableRegistry::get('Maitrises', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Maitrises);

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
