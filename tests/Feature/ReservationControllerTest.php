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

    public function testIndex()
    {
        $url = route('reservation.index');
        $response = $this->get($url);
        $response->assertOk()
            ->assertViewIs('reservation.index');
    }

    public function testShow()
    {
        $url = route('reservation.show', ['reservationId' => 1]);
        $response = $this->get($url);
        $response->assertOk()
            ->assertViewIs('reservation.show');
    }

    public function testEdit()
    {
        $url = route('reservation.show', ['reservationId' => 1]);
        $response = $this->get($url);
        $response->assertOk()
            ->assertViewIs('reservation.show');
    }

    public function testUpdate()
    {
        $url = route('reservation.show', ['reservationId' => 1]);
        $response = $this->get($url);
        $response->assertOk()
            ->assertViewIs('reservation.show');
    }

    public function testDelete()
    {
        $url = route('reservation.show', ['reservationId' => 1]);
        $response = $this->get($url);
        $response->assertOk()
            ->assertViewIs('reservation.show');
    }
}
