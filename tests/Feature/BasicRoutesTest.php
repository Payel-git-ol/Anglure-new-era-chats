<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BasicRoutesTest extends TestCase
{
    /** @test */
    public function home_page_loads_successfully()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /** @test */
    public function login_page_loads_successfully()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    /** @test */
    public function register_page_loads_successfully()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
}
