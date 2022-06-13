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
    public const TABLE_NAME = 't_parking_transaction';
    public const PRIMARY_KEY = 'parking_transaction_no';

    /**
     * Database Attributes
     */
    public const TRANSACTION_ID = 'transaction_id';
    public const PARKING_COST = 'parking_cost';
    public const PARKING_DURATION = 'parking_duration';
}
