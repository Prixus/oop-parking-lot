<?php


namespace App\Repositories\Database;

use App\Constants\ParkingEntrypointConstants;
use App\Models\ParkingEntrypoint;

/**
 * Class ParkingEntrypointRepository
 *
 * @package App\Repositories\Database
 * @author Simon Peter Calamno
 * @since 2022.06.15
 */
class ParkingEntrypointRepository extends DatabaseBaseRepository
{
    /**
     * @var ParkingEntrypoint
     */
    private $oParkingEntrypointModel;

    /**
     * ParkingEntrypointRepository constructor.
     * @param ParkingEntrypoint $oParkingEntrypointModel
     */
    public function __construct(ParkingEntrypoint $oParkingEntrypointModel) : void
    {
        $this->oParkingEntrypointModel = $oParkingEntrypointModel;
        $this->setPrimaryKey(ParkingEntrypointConstants::PRIMARY_KEY);
    }

    /**
     * Creates a parking entrypoint record
     * @param array $aParkingEntrypointData
     * @return mixed
     */
    public function createParkingEntryPoint(array $aParkingEntrypointData)
    {
        return $this->setModel($this->oParkingEntrypointModel)
            ->createRecord($aParkingEntrypointData);
    }
}
