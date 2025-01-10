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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->string('display_name')->nullable();
            $table->double('phone')->nullable();
            $table->string('i_am')->nullable();
            $table->integer('birth_year')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->double('home_phone')->nullable();
            $table->double('mobile_number')->nullable();
            $table->string('communication_lang')->nullable();
            $table->boolean('send_me_updates')->default(0)->nullable();
            $table->boolean('send_confirm')->default(0)->nullable();
            $table->boolean('add_my_notes')->default(0)->nullable();
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
        Schema::dropIfExists('user_profiles');
    }
};
