<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateToursTable
 */
class CreateToursTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tour_type_id');
            $table->string('title');
            $table->string('alias');
            $table->tinyInteger('symbol_price');
            $table->string('place');
            $table->text('small_description');
            $table->text('description');
            $table->string('small_image');
            $table->string('video_link')->nullable();
            $table->tinyInteger('hot');

            $table->string('info_dates')->nullable();
            $table->string('info_places')->nullable();
            $table->string('info_meals')->nullable();
            $table->string('info_medical')->nullable();
            $table->string('info_kids')->nullable();
            $table->string('info_price')->nullable();

            $table->json('schedule')->nullable();
            $table->json('program')->nullable();
            $table->json('faq')->nullable();
            $table->tinyInteger('visible');
            $table->integer('order')->default(0);
            $table->timestamps();

            $table->foreign('tour_type_id')
                ->references('id')
                ->on('tour_types')
                ->onDelete('cascade');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
}
