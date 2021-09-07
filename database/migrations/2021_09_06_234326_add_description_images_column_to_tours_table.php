<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class AddDescriptionImagesColumnToToursTable
 */
class AddDescriptionImagesColumnToToursTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->text('description_images')->after('images')->nullable();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->dropColumn('description_images');
        });
    }
}
