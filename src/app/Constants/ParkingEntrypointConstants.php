<?php


namespace App\Constants;

/**
 * Class ParkingEntrypointConstants
 *
 * @package App\Constants
 * @author Simon Peter Calamno
 * @since 2022.06.13
 */
class ParkingEntrypointConstants extends BaseConstants
{
    /**
     * Database Table name and Primary key
     */
    public const TABLE_NAME = 't_parking_entrypoint';
    public const PRIMARY_KEY = 'parking_entrypoint_no';

    /**
     * Database Attributes
     */
    public const SIZE = 'size';
    public const IS_OCCUPIED = 'is_occupied';
}
