<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SlPostsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SlPostsTable Test Case
 */
class SlPostsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SlPostsTable
     */
    public $SlPosts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sl_posts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SlPosts') ? [] : ['className' => 'App\Model\Table\SlPostsTable'];
        $this->SlPosts = TableRegistry::get('SlPosts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SlPosts);

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
