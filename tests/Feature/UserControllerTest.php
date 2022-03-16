<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function testIndex()
    {
        $url = route('user.index');
        $response = $this->get($url);
        $response->assertOk();
    }
}
