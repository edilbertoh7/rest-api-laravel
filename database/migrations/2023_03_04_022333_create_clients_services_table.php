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
        Schema::create('clients_services', function (Blueprint $table) {
            $table->id();
            $table->unique(array('client_id', 'service_id'))->unsignedBigIntegerunique();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('service_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('service_id')->references('id')->on('services');
            $table->timestamps();
        });
    }
//edy
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients_services');
    }
};
