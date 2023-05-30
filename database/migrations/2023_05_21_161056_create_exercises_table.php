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
        Schema::create('exercises', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("slug");
            $table->integer("icon_id");
            $table->string("image_url");
            $table->string("video_url");
            $table->string("common_mistakes")->nullable();
            $table->integer("diamonds");
            $table->foreignId("category_id")->references('id')->on("categories");
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
