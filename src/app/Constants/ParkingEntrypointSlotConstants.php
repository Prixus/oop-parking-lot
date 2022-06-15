<?php


namespace App\Constants;

/**
 * Class ParkingEntrypointSlotConstants
 *
 * @package App\Constants
 * @since 2022.06.13
 */
class ParkingEntrypointSlotConstants extends BaseConstants
{
    /**
     * Database Table name and Primary key
     */
    public const TABLE_NAME = 't_parking_entrypoint_slots';
    public const PRIMARY_KEY = 'parking_entrypoint_slot_no';

    /**
     * Database Attributes
     */
    public const DISTANCE = 'distance';

    /**
     * Database Indexes
     */
    public const INDEX_FK_PARKING_SLOT = 'ixnn_parking_entrypoint__parking_slot_no';
    public const INDEX_FK_PARKING_ENTRYPOINT = 'ixnn_parking_entrypoint__parking_entrypoint_no';
}
