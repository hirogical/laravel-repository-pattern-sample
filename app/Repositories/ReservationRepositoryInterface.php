<?php

namespace App\Repositories;

interface ReservationRepositoryInterface
{
    public function index();

    public function findByReservationId(int $reservationId);

    public function update();

    public function destroy();
}
