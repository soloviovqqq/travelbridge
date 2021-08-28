<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class AddColorColumnToTourTypesTable
 */
class AddColorColumnToTourTypesTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::table('tour_types', function (Blueprint $table) {
            $table->string('color')->after('icon');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::table('tour_types', function (Blueprint $table) {
            $table->dropColumn('color');
        });
    }
}
