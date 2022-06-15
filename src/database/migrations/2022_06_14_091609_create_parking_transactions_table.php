<?php

use App\Constants\CarConstants;
use App\Constants\ParkingEntrypointConstants;
use App\Constants\ParkingTransactionConstants;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Parking Transaction Table Migration
 *
 * @author Simon Peter Calamno
 * @since 2022.06.14
 */
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(ParkingTransactionConstants::TABLE_NAME, function (Blueprint $table) {
            $table->bigIncrements(ParkingTransactionConstants::PRIMARY_KEY);
            $table->foreignId(ParkingTransactionConstants::CAR_NO);
            $table->foreignId(ParkingTransactionConstants::PARKING_ENTRYPOINT_SLOT_NO);
            $table->string(ParkingTransactionConstants::TRANSACTION_ID, 20);
            $table->decimal(ParkingTransactionConstants::PARKING_COST);
            $table->mediumInteger(ParkingTransactionConstants::PARKING_DURATION);
            $table->timestamps();

            $table->foreign(
                ParkingTransactionConstants::CAR_NO,
                ParkingTransactionConstants::INDEX_FK_CAR
            )->references(CarConstants::PRIMARY_KEY)
                ->on(CarConstants::TABLE_NAME)
                ->onDelete(ParkingTransactionConstants::CASCADE)
                ->onUpdate(ParkingTransactionConstants::CASCADE);

            $table->foreign(
                ParkingTransactionConstants::PARKING_ENTRYPOINT_SLOT_NO,
                ParkingTransactionConstants::INDEX_FK_PARKING_ENTRYPOINT_SLOT
            )->references(ParkingEntrypointConstants::PRIMARY_KEY)
                ->on(ParkingEntrypointConstants::TABLE_NAME)
                ->onDelete(ParkingTransactionConstants::CASCADE)
                ->onUpdate(ParkingTransactionConstants::CASCADE);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(ParkingTransactionConstants::TABLE_NAME);
    }
};
