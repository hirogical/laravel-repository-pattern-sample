<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReservationControllerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function testGetReservations()
    {
        $url = route('reservations');
        $response = $this->get($url);
        $response->assertOk();
    }
}
