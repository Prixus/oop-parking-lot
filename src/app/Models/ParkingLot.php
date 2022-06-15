<?php

namespace App\Models;

use App\Constants\ParkingLotConstants;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ParkingLot
 *
 * @package App\Models
 * @author Simon Peter Calamno
 * @since 2022.06.14
 */
class ParkingLot extends Model
{
    /**
     * Syncs the model to a database table
     * @var string
     */
    protected $table = ParkingLotConstants::TABLE_NAME;

    /**
     * Sets the Primary Key
     * @var string
     */
    protected $primaryKey = ParkingLotConstants::PRIMARY_KEY;
}
