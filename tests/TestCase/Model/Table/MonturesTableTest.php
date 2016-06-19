<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MonturesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MonturesTable Test Case
 */
class MonturesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MonturesTable
     */
    public $Montures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.montures',
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
        $config = TableRegistry::exists('Montures') ? [] : ['className' => 'App\Model\Table\MonturesTable'];
        $this->Montures = TableRegistry::get('Montures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Montures);

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
