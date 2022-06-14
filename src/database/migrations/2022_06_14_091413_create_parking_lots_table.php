<?php

use App\Constants\ParkingLotConstants;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Parking Lot Table Migration
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
        Schema::create(ParkingLotConstants::TABLE_NAME, function (Blueprint $table) {
            $table->bigIncrements(ParkingLotConstants::PRIMARY_KEY);
            $table->string(ParkingLotConstants::NAME);
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
        Schema::dropIfExists(ParkingLotConstants::TABLE_NAME);
    }
};
