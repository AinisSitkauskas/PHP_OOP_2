<?php


namespace App;


interface ReservableInterface
{
    public function addReservation($reservation);

    public function removeReservation($reservation);
}