<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class AddDescriptionImagesColumnToGroupToursTable
 */
class AddDescriptionImagesColumnToGroupToursTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::table('group_tours', function (Blueprint $table) {
            $table->text('description_images')->after('files')->nullable();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::table('group_tours', function (Blueprint $table) {
            $table->dropColumn('description_images');
        });
    }
}
