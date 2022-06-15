<?php


namespace App\Constants;

/**
 * Class ParkingSlotConstants
 *
 * @package App\Constants
 * @author Simon Peter Calamno
 * @since 2022.06.13
 */
class ParkingSlotConstants extends BaseConstants
{
    /**
     * Database Table name and Primary key
     */
    public const TABLE_NAME = 't_parking_slots';
    public const PRIMARY_KEY = 'parking_slot_no';

    /**
     * Database Attributes
     */
    public const SIZE = 'size';
    public const IS_OCCUPIED = 'is_occupied';

    public const INDEX_FK_PARKING_LOT = 'ixnn_parking_slot__parking_lot_no';
}
