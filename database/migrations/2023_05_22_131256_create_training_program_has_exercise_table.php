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
        Schema::create('training_program_has_exercise', function (Blueprint $table) {
            $table->id();
            $table->foreignId("training_program_id")->references("id")->on("training_programs");
            $table->foreignId("exercise_id")->references("id")->on("exercises");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
