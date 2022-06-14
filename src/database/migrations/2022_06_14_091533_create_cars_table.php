<?php

use App\Constants\CarConstants;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Car Table Migration
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
        Schema::create(CarConstants::TABLE_NAME, function (Blueprint $table) {
            $table->bigIncrements(CarConstants::PRIMARY_KEY);
            $table->boolean(CarConstants::IS_PARKED);
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
        Schema::dropIfExists(CarConstants::TABLE_NAME);
    }
};
