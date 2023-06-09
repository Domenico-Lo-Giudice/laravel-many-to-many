<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_tech', function (Blueprint $table) {
            $table->id();

            $table->foreignId('project_id')
            ->constrained()
            ->cascadeOnDelete();

            $table->foreignId('tech_id')
            ->constrained()
            ->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_tech');
    }
};
