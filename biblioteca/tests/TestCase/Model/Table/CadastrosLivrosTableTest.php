<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CadastrosLivrosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CadastrosLivrosTable Test Case
 */
class CadastrosLivrosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CadastrosLivrosTable
     */
    public $CadastrosLivros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CadastrosLivros',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CadastrosLivros') ? [] : ['className' => CadastrosLivrosTable::class];
        $this->CadastrosLivros = TableRegistry::getTableLocator()->get('CadastrosLivros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CadastrosLivros);

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
