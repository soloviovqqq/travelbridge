<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class AddTitleColumnToFilesTable
 */
class AddTitleColumnToFilesTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::table('files', function (Blueprint $table) {
            $table->string('title')->after('id')->nullable();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::table('files', function (Blueprint $table) {
            $table->dropColumn('title');
        });
    }
}
