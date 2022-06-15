<?php


namespace App\Repositories\Database;

use App\Constants\ParkingTransactionConstants;
use App\Models\ParkingTransaction;

/**
 * Class ParkingTransactionRepository
 *
 * @package App\Repositories\Database
 * @author Simon Peter Calamno
 * @since 2022.06.15
 */
class ParkingTransactionRepository extends DatabaseBaseRepository
{
    /**
     * @var ParkingTransaction
     */
    private $oParkingTransactionModel;

    /**
     * ParkingTransactionRepository constructor.
     * @param ParkingTransaction $oParkingTransactionModel
     */
    public function __construct(ParkingTransaction $oParkingTransactionModel)
    {
        $this->oParkingTransactionModel = $oParkingTransactionModel;
        $this->setPrimaryKey(ParkingTransactionConstants::PRIMARY_KEY);
    }

    /**
     * Creates a Parking transaction record
     * @param array $aParkingTransactionData
     * @return mixed
     */
    public function createParkingTransactionRecord(array $aParkingTransactionData)
    {
        return $this->setModel($this->oParkingTransactionModel)
            ->createRecord($aParkingTransactionData);
    }
}
