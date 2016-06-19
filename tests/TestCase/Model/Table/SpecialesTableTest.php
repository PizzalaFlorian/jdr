<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SpecialesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SpecialesTable Test Case
 */
class SpecialesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SpecialesTable
     */
    public $Speciales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.speciales'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Speciales') ? [] : ['className' => 'App\Model\Table\SpecialesTable'];
        $this->Speciales = TableRegistry::get('Speciales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Speciales);

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
