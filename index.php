<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use App\{SingleRoom, Guest, Bedroom, Apartment, Reservation, BookingManager, BookingException};

try {
    $room = new SingleRoom(1408, 99);
    $guest = new Guest('Vardenis', 'Pavardenis');
    $startDate = new \DateTime('2019-04-20');
    $endDate = new \DateTime('2019-04-25');
    $reservation = new Reservation($startDate, $endDate, $guest);
    BookingManager::bookRoom($room, $reservation);
} catch (BookingException $exception) {
    echo $exception->getMessage();
}
