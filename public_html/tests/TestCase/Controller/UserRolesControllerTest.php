<?php
namespace App\Test\TestCase\Controller;

use App\Controller\UserRolesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\UserRolesController Test Case
 */
class UserRolesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_roles',
        'app.notifications',
        'app.users',
        'app.customers',
        'app.customer_notes',
        'app.messages',
        'app.project_tasks',
        'app.ticket_events',
        'app.ticket_history',
        'app.tickets'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
