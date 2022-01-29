<?php

namespace App\Services;

use App\Repositories\ReservationRepositoryInterface;

class ReservationService
{
    protected $reservationRepository;

    public function __construct(ReservationRepositoryInterface $reservationRepository)
    {
        $this->reservationRepository = $reservationRepository;
    }

    public function getReservations()
    {
        $reservations = $this->reservationRepository->index();

        return $reservations;
    }

    public function getReservationByReservationId(int $reservationId)
    {
        $reservation = $this->reservationRepository->show($reservationId);

        return $reservation;
    }
}
