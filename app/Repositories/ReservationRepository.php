<?php

namespace App\Repositories;

use App\Models\Reservation;
use Carbon\Carbon;

class ReservationRepository implements ReservationRepositoryInterface
{
    protected $reservation;

    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

    public function index()
    {
        $reservations = $this->reservation::with([
            'user:id,name',
            'book:id,title'
        ])->get();

        return $reservations;
    }

    public function show(int $reservationId)
    {
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
