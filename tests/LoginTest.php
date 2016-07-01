<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testShowLoginForm()
    {
    	$response = $this->action('GET', 'Auth\AuthController@showLoginForm');

        $this->assertResponseOk($response);
    }
}
