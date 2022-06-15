<?php


namespace App\Repositories\Database;


use App\Constants\ParkingEntrypointSlotConstants;
use App\Models\ParkingEntrypointSlot;

/**
 * Class ParkingEntrypointSlotRepository
 *
 * @package App\Repositories\Database
 * @author Simon Peter Calamno
 * @since 2022.06.15
 */
class ParkingEntrypointSlotRepository extends DatabaseBaseRepository
{
    /**
     * @var ParkingEntrypointSlot
     */
    private $oParkingEntrypointSlotModel;

    /**
     * ParkingEntrypointSlotRepository constructor.
     * @param ParkingEntrypointSlot $oParkingEntrypointSlotModel
     */
    public function __construct(ParkingEntrypointSlot $oParkingEntrypointSlotModel)
    {
        $this->oParkingEntrypointSlotModel = $oParkingEntrypointSlotModel;
        $this->setPrimaryKey(ParkingEntrypointSlotConstants::PRIMARY_KEY);
    }

    /**
     * Creates a Parking Entrypoint Slot record
     * @param array $aParkingEntrypointSlotData
     * @return mixed
     */
    public function createParkingEntrypointSlotRepository(array $aParkingEntrypointSlotData)
    {
        return $this->setModel($this->oParkingEntrypointSlotModel)
            ->createRecord($aParkingEntrypointSlotData);
    }
}
