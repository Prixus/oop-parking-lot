<?php

namespace App\Models;

use App\Constants\CarConstants;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Car
 *
 * @package App\Models
 * @author Simon Peter Calamno
 * @since 2022.06.14
 */
class Car extends Model
{
    /**
     * Syncs the model to a database table
     * @var string
     */
    protected $table = CarConstants::TABLE_NAME;

    /**
     * Sets the Primary Key
     * @var string
     */
    protected $primaryKey = CarConstants::PRIMARY_KEY;

    /**
     * The attributes that aren't mass assignable.
     * @var array
     */
    protected $guarded = [];
}
