<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class AddAdditionalInfoColumnToToursTable
 */
class AddAdditionalInfoColumnToToursTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->json('additional_info')->after('info_price')->nullable();

        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->dropColumn('additional_info');
        });
    }
}
