<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminLithuania extends TestCase
{
	protected function setUp()
    {
        /**
         * This disables the exception handling to display the stacktrace on the console
         * the same way as it shown on the browser
         */
        parent::setUp();
        $this->withoutExceptionHandling();
    }
   
    // public function testCan_generate_Company_record()
    // {
    //     $response = $this->post('/generateCompanyRcords');

    //     $response->assertStatus(201);
    // }

    // public function testCan_generate_Company_Details()
    // {
    //     $response = $this->post('/generateCompanyDetails');

    //     $response->assertStatus(201);
    // }

    public function testLanding_Page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee("We Evaluate Organization's Value through");
        $response->assertSee("Outside the box Thinking");
    }
}
