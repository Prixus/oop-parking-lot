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
    public const TABLE_NAME = 't_parking_entrypoints';
    public const PRIMARY_KEY = 'parking_entrypoint_no';

    /**
     * Database Attributes
     */
    public const NAME = 'name';

    /**
     * Database Indexes
     */
    public const INDEX_FK_PARKING_LOT = 'parking_entrypoint__parking_lot_no';
}
