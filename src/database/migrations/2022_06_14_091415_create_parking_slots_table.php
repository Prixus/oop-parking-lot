<?php

use App\Constants\ParkingLotConstants;
use App\Constants\ParkingSlotConstants;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Parking Slots Table Migration
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
        Schema::create(ParkingSlotConstants::TABLE_NAME, function (Blueprint $table) {
            $table->bigIncrements(ParkingSlotConstants::PRIMARY_KEY);
            $table->foreignId(ParkingSlotConstants::PARKING_LOT_NO);
            $table->string(ParkingSlotConstants::SIZE, 5);
            $table->boolean(ParkingSlotConstants::IS_OCCUPIED);
            $table->timestamps();

            $table->foreign(
                ParkingSlotConstants::PARKING_LOT_NO,
                ParkingSlotConstants::INDEX_FK_PARKING_LOT
            )->references(ParkingLotConstants::PRIMARY_KEY)
                ->on(ParkingLotConstants::TABLE_NAME)
                ->onDelete(ParkingSlotConstants::CASCADE)
                ->onUpdate(ParkingSlotConstants::CASCADE);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(ParkingSlotConstants::TABLE_NAME);
    }
};
