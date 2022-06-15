<?php

use App\Constants\ParkingEntrypointConstants;
use App\Constants\ParkingEntrypointSlotConstants;
use App\Constants\ParkingSlotConstants;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Parking Entrypoint Slots Migration
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
        Schema::create(ParkingEntrypointSlotConstants::TABLE_NAME, function (Blueprint $table) {
            $table->bigIncrements(ParkingEntrypointSlotConstants::PRIMARY_KEY);
            $table->foreignId(ParkingEntrypointSlotConstants::PARKING_SLOT_NO);
            $table->foreignId(ParkingEntrypointSlotConstants::PARKING_ENTRYPOINT_NO);
            $table->integer(ParkingEntrypointSlotConstants::DISTANCE);

            $table->foreign(
                ParkingEntrypointSlotConstants::PARKING_SLOT_NO,
                ParkingEntrypointSlotConstants::INDEX_FK_PARKING_SLOT
            )->references(ParkingSlotConstants::PRIMARY_KEY)
                ->on(ParkingSlotConstants::TABLE_NAME)
                ->onDelete(ParkingEntrypointSlotConstants::CASCADE)
                ->onUpdate(ParkingEntrypointSlotConstants::CASCADE);

            $table->foreign(
                ParkingEntrypointSlotConstants::PARKING_ENTRYPOINT_NO,
                ParkingEntrypointSlotConstants::INDEX_FK_PARKING_ENTRYPOINT
            )->references(ParkingEntrypointConstants::PRIMARY_KEY)
                ->on(ParkingEntrypointConstants::TABLE_NAME)
                ->onDelete(ParkingEntrypointSlotConstants::CASCADE)
                ->onUpdate(ParkingEntrypointSlotConstants::CASCADE);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(ParkingEntrypointSlotConstants::TABLE_NAME);
    }
};
