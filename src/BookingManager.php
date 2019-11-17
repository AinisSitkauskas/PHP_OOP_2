<?php

declare(strict_types=1);

namespace App;


class BookingManager
{

    /**
     * @param Room $room
     * @param Reservation $reservation
     */
    public static function bookRoom($room, $reservation): void
    {
        $room->addReservation($reservation);

        echo 'Room ' . $room->__toString() . ' successfully booked for ' . $reservation->getGuest()->__toString() .
            ' from ' . $reservation->__toString() . '!';

    }

}
