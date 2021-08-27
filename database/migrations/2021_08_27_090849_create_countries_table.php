<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateCountriesTable
 */
class CreateCountriesTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('alias');
            $table->string('slogan')->nullable();
            $table->text('description');
            $table->string('currency');
            $table->string('languages');
            $table->string('small_image');
            $table->string('big_image');
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
        Schema::dropIfExists('countries');
    }
}
