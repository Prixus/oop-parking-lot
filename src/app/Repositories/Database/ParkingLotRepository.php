<?php


namespace App\Repositories\Database;

use App\Constants\ParkingLotConstants;
use App\Models\ParkingLot;

/**
 * Class ParkingLotRepository
 *
 * @package App\Repositories\Database
 * @author Simon Peter Calamno
 * @since 2022.06.15
 */
class ParkingLotRepository extends DatabaseBaseRepository
{
    /**
     * @var ParkingLot
     */
    private $oParkingLotModel;

    /**
     * ParkingLotRepository constructor.
     * @param ParkingLot $oParkingLotModel
     */
    public function __construct(ParkingLot $oParkingLotModel)
    {
        $this->oParkingLotModel = $oParkingLotModel;
        $this->setPrimaryKey(ParkingLotConstants::PRIMARY_KEY);
    }

    /**
     * Creates a parking lot record
     * @param array $aParkingLotData
     * @return mixed
     */
    public function createParkingLot(array $aParkingLotData)
    {
        return $this->setModel($this->oParkingLotModel)
            ->createRecord($aParkingLotData);
    }
}
