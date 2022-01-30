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

    public function getReservation(int $reservationId)
    {
        $reservation = $this->reservationRepository->findByReservationId($reservationId);

        return $reservation;
    }

    public function UpdateReservation(int $reservationId)
    {
        $reservation = $this->reservationRepository->findByReservationId($reservationId);

        return $reservation;
    }

    public function DeleteReservation(int $reservationId)
    {
        $reservation = $this->reservationRepository->findByReservationId($reservationId);

        return $reservation;
    }
}
