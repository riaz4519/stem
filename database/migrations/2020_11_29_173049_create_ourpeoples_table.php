<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurpeoplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ourpeoples', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->bigInteger('peoplecategory_id')->unsigned()->nullable();
            $table->foreign('peoplecategory_id')->references('id')->on('peoplecategories')->onDelete('set null');
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
        Schema::dropIfExists('ourpeoples');
    }
}
