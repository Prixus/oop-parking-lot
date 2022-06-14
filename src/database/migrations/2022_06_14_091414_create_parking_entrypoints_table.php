<?php

use App\Constants\ParkingEntrypointConstants;
use App\Constants\ParkingLotConstants;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(ParkingEntrypointConstants::TABLE_NAME, function (Blueprint $table) {
            $table->bigIncrements(ParkingEntrypointConstants::PRIMARY_KEY);
            $table->foreignId(ParkingEntrypointConstants::PARKING_LOT_NO);
            $table->string(ParkingEntrypointConstants::NAME);
            $table->timestamps();

            $table->foreign(
                ParkingEntrypointConstants::PARKING_LOT_NO,
                ParkingEntrypointConstants::INDEX_FK_PARKING_LOT
            )->references(ParkingLotConstants::PRIMARY_KEY)
                ->on(ParkingLotConstants::TABLE_NAME)
                ->onDelete(ParkingEntrypointConstants::CASCADE)
                ->onUpdate(ParkingEntrypointConstants::CASCADE);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(ParkingEntrypointConstants::TABLE_NAME);
    }
};
