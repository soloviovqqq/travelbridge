<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('country_id');
            $table->string('title');
            $table->string('alias');
            $table->tinyInteger('rating');
            $table->tinyInteger('symbol_price');
            $table->string('place');

            $table->text('description');
            $table->string('small_image');
            $table->string('video_link')->nullable();

            $table->string('info_rating')->nullable();
            $table->string('info_meals')->nullable();
            $table->string('info_medical')->nullable();
            $table->string('info_kids')->nullable();
            $table->string('info_price')->nullable();

            $table->json('faq')->nullable();

            $table->tinyInteger('wifi');
            $table->tinyInteger('reservations');
            $table->tinyInteger('credit_cards');
            $table->tinyInteger('non_smoking');
            $table->tinyInteger('air_conditioner');
            $table->tinyInteger('car_parking');
            $table->tinyInteger('cocktails');
            $table->tinyInteger('pool');

            $table->tinyInteger('visible');
            $table->integer('order')->default(0);
            $table->timestamps();


            $table->foreign('country_id')
                ->references('id')
                ->on('countries')
                ->onDelete('cascade');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
}
