<?php

namespace App\Models;

use App\Constants\ParkingEntrypointConstants;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ParkingEntrypoint
 *
 * @package App\Models
 * @author Simon Peter Calamno
 * @since 2022.06.14
 */
class ParkingEntrypoint extends Model
{
    /**
     * Syncs the model to a database table
     * @var string
     */
    protected $table = ParkingEntrypointConstants::TABLE_NAME;

    /**
     * Sets the Primary Key
     * @var string
     */
    protected $primaryKey = ParkingEntrypointConstants::PRIMARY_KEY;
}
