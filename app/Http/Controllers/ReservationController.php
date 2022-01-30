<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReservationIndexResource;
use App\Http\Resources\ReservationShowResource;
use App\Services\ReservationService;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;

class ReservationController extends BaseController
{
    protected $reservationService;

    public function __construct(ReservationService $reservationService)
    {
        $this->reservationService = $reservationService;
    }

    public function index()
    {
        try {
            $reservations = ReservationIndexResource::collection(
                $this->reservationService->getReservations()
            );

            return view('reservation.index')->with('reservations', $reservations);
        } catch (\Exception $ex) {
            logger($ex->getMessage());

            return response()->json([$ex->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function show(int $reservationId)
    {
        try {
            $reservation = new ReservationShowResource(
                $this->reservationService->getReservation($reservationId)
            );

            return view('reservation.show')->with('reservation', $reservation);
        } catch (\Exception $ex) {
            logger($ex->getMessage());

            return response()->json([$ex->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
