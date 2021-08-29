<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateGroupTourTourTable
 */
class CreateGroupTourTourTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('group_tour_tour', function (Blueprint $table) {
            $table->unsignedBigInteger('group_tour_id');
            $table->unsignedBigInteger('tour_id');

            $table->foreign('group_tour_id')
                ->references('id')
                ->on('group_tours')
                ->onDelete('cascade');
            $table->foreign('tour_id')
                ->references('id')
                ->on('tours')
                ->onDelete('cascade');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('group_tour_tour');
    }
}
