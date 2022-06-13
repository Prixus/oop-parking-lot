<?php


namespace App\Constants;

/**
 * Class CarConstants
 *
 * @package App\Constants
 * @since 2022.06.13
 */
class CarConstants extends BaseConstants
{
    /**
     * Database Table name and Primary key
     */
    public const TABLE_NAME = 't_car';
    public const PRIMARY_KEY = 'car_no';

    /**
     * Database Attributes
     */
    public const IS_PARKED = 'is_parked';
    public const SIZE = 'size';
}
