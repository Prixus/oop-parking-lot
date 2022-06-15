<?php


namespace App\Constants;

/**
 * Class ParkingTransactionConstants
 *
 * @package App\Constants
 * @author Simon Peter Calamno
 * @since 2022.06.13
 */
class ParkingTransactionConstants extends BaseConstants
{
    /**
     * Database Table name and Primary key
     */
    public const TABLE_NAME = 't_parking_transactions';
    public const PRIMARY_KEY = 'parking_transaction_no';

    /**
     * Database Attributes
     */
    public const TRANSACTION_ID = 'transaction_id';
    public const PARKING_COST = 'parking_cost';
    public const PARKING_DURATION = 'parking_duration';

    /**
     * Database Indexes
     */
    public const INDEX_FK_CAR = 'ixnn_parking_transaction__car_no';
    public const INDEX_FK_PARKING_ENTRYPOINT_SLOT = 'ixnn_parking_transaction__parking_entrypoint_slot_no';
}
