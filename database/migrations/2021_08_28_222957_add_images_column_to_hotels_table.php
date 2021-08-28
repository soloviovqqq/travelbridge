<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class AddImagesColumnToHotelsTable
 */
class AddImagesColumnToHotelsTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->json('images')->after('small_image')->nullable();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->dropColumn('images');
        });
    }
}
