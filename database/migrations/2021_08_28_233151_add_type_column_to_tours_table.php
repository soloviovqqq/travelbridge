<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class AddTypeColumnToToursTable
 */
class AddTypeColumnToToursTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->tinyInteger('type')->after('tour_type_id');
            $table->string('dates')->after('symbol_price');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->dropColumn('type');
            $table->dropColumn('dates');
        });
    }
}
