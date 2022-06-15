<?php


namespace App\Repositories\Database;

use App\Models\Car;

/**
 * Class CarRepository
 *
 * @package App\Repositories\Database
 * @author Simon Peter Calamno
 * @since 2022.06.15
 */
class CarRepository extends DatabaseBaseRepository
{
    /**
     * @var Car
     */
    private $oCarModel;

    /**
     * CarRepository constructor.
     * @param Car $oCarModel
     */
    public function __construct(Car $oCarModel)
    {
        $this->oCarModel = $oCarModel;
        $this->setPrimaryKey($oCarModel);
    }

    /**
     * Create Car record
     * @param array $aCarData
     * @return mixed
     */
    public function createCar(array $aCarData)
    {
        return $this->setModel($this->oCarModel)
            ->createRecord($aCarData);
    }
}
