<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class ChangeSymbolPriceColumnInToursTable
 */
class ChangeSymbolPriceColumnInToursTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->dropColumn('symbol_price');
            $table->integer('price_from')->default(0);
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->dropColumn('price_from');
            $table->tinyInteger('symbol_price')->default(0);
        });
    }
}
