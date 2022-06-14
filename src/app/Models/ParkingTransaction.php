<?php

namespace App\Models;

use App\Constants\ParkingTransactionConstants;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ParkingTransaction
 *
 * @package App\Models
 * @author Simon Peter Calamno
 * @since 2022.06.14
 */
class ParkingTransaction extends Model
{
    /**
     * Syncs the model to a database table
     * @var string
     */
    protected $table = ParkingTransactionConstants::TABLE_NAME;

    /**
     * Sets the Primary Key
     * @var string
     */
    protected $primaryKey = ParkingTransactionConstants::PRIMARY_KEY;
}
