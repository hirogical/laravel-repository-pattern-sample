<?php

namespace App\Repositories;

interface ReservationRepositoryInterface
{
    public function index();

    public function show(int $reservationId);

    public function edit();

    public function update();

    public function destroy();
}
