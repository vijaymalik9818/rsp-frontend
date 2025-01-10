<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realtor_property_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id')->index()->nullable();
            $table->unsignedBigInteger('realtor_id')->index()->nullable();
            $table->datetime('request_datetime');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->text('message');
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
        Schema::dropIfExists('realtor_property_requests');
    }
};
