<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class AddFilesColumnToGroupToursTable
 */
class AddFilesColumnToGroupToursTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::table('group_tours', function (Blueprint $table) {
            $table->json('files')->after('faq');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::table('group_tours', function (Blueprint $table) {
            $table->dropColumn('files');
        });
    }
}
