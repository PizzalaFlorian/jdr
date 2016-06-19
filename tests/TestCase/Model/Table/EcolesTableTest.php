<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EcolesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EcolesTable Test Case
 */
class EcolesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EcolesTable
     */
    public $Ecoles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ecoles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Ecoles') ? [] : ['className' => 'App\Model\Table\EcolesTable'];
        $this->Ecoles = TableRegistry::get('Ecoles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ecoles);

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
