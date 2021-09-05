<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateMainInfosTable
 */
class CreateMainInfosTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('main_infos', function (Blueprint $table) {
            $table->id();
            $table->text('agency_text');
            $table->json('gallery');
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('main_infos');
    }
}
