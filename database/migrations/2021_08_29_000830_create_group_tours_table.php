<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateGroupToursTable
 */
class CreateGroupToursTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('group_tours', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('alias');
            $table->tinyInteger('symbol_price');
            $table->string('place');
            $table->text('description');
            $table->string('big_image');
            $table->string('small_image');
            $table->json('faq')->nullable();
            $table->tinyInteger('visible');
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('group_tours');
    }
}
