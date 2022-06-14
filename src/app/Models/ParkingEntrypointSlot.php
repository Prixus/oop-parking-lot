<?php

namespace App\Models;

use App\Constants\ParkingEntrypointSlotConstants;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ParkingEntrypointSlot
 *
 * @package App\Models
 * @author Simon Peter Calamno
 * @since 2022.06.14
 */
class ParkingEntrypointSlot extends Model
{
    /**
     * Syncs the model to a database table
     * @var string
     */
    protected $table = ParkingEntrypointSlotConstants::TABLE_NAME;

    /**
     * Sets the Primary Key
     * @var string
     */
    protected $primaryKey = ParkingEntrypointSlotConstants::PRIMARY_KEY;
}
