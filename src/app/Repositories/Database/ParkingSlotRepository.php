<?php


namespace App\Repositories\Database;


use App\Constants\ParkingSlotConstants;
use App\Models\ParkingSlot;

/**
 * Class ParkingSlotRepository
 *
 * @package App\Repositories\Database
 * @author Simon Peter Calamno
 * @since 2022.06.15
 */
class ParkingSlotRepository extends DatabaseBaseRepository
{
    /**
     * @var ParkingSlot
     */
    private $oParkingSlotModel;

    /**
     * ParkingSlotRepository constructor.
     * @param ParkingSlot $oParkingSlotModel
     */
    public function __construct(ParkingSlot $oParkingSlotModel)
    {
        $this->oParkingSlotModel = $oParkingSlotModel;
        $this->setPrimaryKey(ParkingSlotConstants::PRIMARY_KEY);
    }

    /**
     * Creates a parking slot record
     * @param array $aParkingSlotData
     * @return mixed
     */
    public function createParkingSlot(array $aParkingSlotData)
    {
        return $this->setModel($this->oParkingSlotModel)
            ->createRecord($aParkingSlotData);
    }
}
