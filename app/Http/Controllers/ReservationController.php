<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReservationResource;
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
            $reservations = ReservationResource::collection(
                $this->reservationService->getReservations()
            );

            return view('reservation.index', compact('reservations'));
        } catch (\Exception $ex) {
            logger($ex->getMessage());

            return response()->json([$ex->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function show(int $reservationId)
    {
        try {
            return new ReservationResource(
                $this->reservationService->getReservationByReservationId($reservationId)
            );
        } catch (\Exception $ex) {
            logger($ex->getMessage());

            return response()->json([$ex->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
