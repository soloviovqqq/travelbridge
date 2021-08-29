<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class AddAdditionalInfoColumnToHotelsTable
 */
class AddAdditionalInfoColumnToHotelsTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->json('additional_info')->after('info_price')->nullable();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->dropColumn('additional_info');
        });
    }
}
