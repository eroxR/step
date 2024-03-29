<?php

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
        Schema::create('dp_contingency', function (Blueprint $table) {
            $table->id();//idconductor_fuec
			$table->unsignedBigInteger('permit_id');//permiso
			$table->unsignedBigInteger('driver_id');//conductor
			
			$table->timestamps();
			
			$table->foreign('driver_id')->references('id')->on('users')->onUpdate('cascade');
			$table->foreign('permit_id')->references('id')->on('permits')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dp_contingency');
    }
};
