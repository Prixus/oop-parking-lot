<?php

namespace App\Models;

use App\Constants\ParkingSlotConstants;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ParkingSlot
 *
 * @package App\Models
 * @author Simon Peter Calamno
 * @since 2022.06.14
 */
class ParkingSlot extends Model
{
    /**
     * Syncs the model to a database table
     * @var string
     */
    protected $table = ParkingSlotConstants::TABLE_NAME;

    /**
     * Sets the Primary Key
     * @var string
     */
    protected $primaryKey = ParkingSlotConstants::PRIMARY_KEY;
}
