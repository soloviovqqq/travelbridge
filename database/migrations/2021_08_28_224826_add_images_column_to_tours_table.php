<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class AddImagesColumnToToursTable
 */
class AddImagesColumnToToursTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->text('images')->after('small_image')->nullable();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->dropColumn('images');
        });
    }
}
