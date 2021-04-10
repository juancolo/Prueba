<?php


namespace App\Constants;


class BoletinStatus
{

    public const ACEPTAR = 1;
    public const NEGAR = 0;

    public const BOLETIN_STATUSES = [
        self::ACEPTAR => 'Si',
        self::NEGAR => 'No'
    ];

}
