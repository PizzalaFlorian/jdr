<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PersonnagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PersonnagesTable Test Case
 */
class PersonnagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PersonnagesTable
     */
    public $Personnages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('Personnages') ? [] : ['className' => 'App\Model\Table\PersonnagesTable'];
        $this->Personnages = TableRegistry::get('Personnages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Personnages);

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
}
