<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FamiliersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FamiliersTable Test Case
 */
class FamiliersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FamiliersTable
     */
    public $Familiers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.familiers',
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
        $config = TableRegistry::exists('Familiers') ? [] : ['className' => 'App\Model\Table\FamiliersTable'];
        $this->Familiers = TableRegistry::get('Familiers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Familiers);

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
