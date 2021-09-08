<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class ChangePriceFromColumnInGroupToursTable
 */
class ChangePriceFromColumnInGroupToursTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::table('group_tours', function (Blueprint $table) {
            $table->string('price_from')->default(0)->change();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::table('group_tours', function (Blueprint $table) {
            $table->integer('price_from')->default(0)->change();
        });
    }
}
