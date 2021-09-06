<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class AddFilesColumnToToursTable
 */
class AddFilesColumnToToursTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->json('files')->after('faq');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->dropColumn('files');
        });
    }
}
