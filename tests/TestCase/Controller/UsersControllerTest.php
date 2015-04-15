<?php
namespace App\Test\TestCase\Controller;

use App\Controller\UsersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\UsersController Test Case
 */
class UsersControllerTest extends IntegrationTestCase
{

    public $fixtures = [
        'Users' => 'app.users'
    ];

    public function testIndex()
    {
      $this->get('/users/index');

      $this->assertResponseOk();
    }

    public function testView()
    {
      $this->get('/users/view/1');

      $this->assertResponseOk();
    }
    
}
