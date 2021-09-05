<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateExchangeRatesTable
 */
class CreateExchangeRatesTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('exchange_rates', function (Blueprint $table) {
            $table->id();
            $table->string('pair');
            $table->string('rate');
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
        Schema::dropIfExists('exchange_rates');
    }
}
