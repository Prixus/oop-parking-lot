<?php


namespace App\Constants;

/**
 * Class ParkingLotConstants
 *
 * @package App\Constants
 * @author Simon Peter Calamno
 * @since 2022.06.13
 */
class ParkingLotConstants extends BaseConstants
{
    /**
     * Database Table name and Primary key
     */
    public const TABLE_NAME = 't_parking_lots';
    public const PRIMARY_KEY = 'parking_lot_no';

    /**
     * Database Attributes
     */
    public const NAME = 'name';
}
