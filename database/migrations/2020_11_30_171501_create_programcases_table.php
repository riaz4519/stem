<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramcasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programcases', function (Blueprint $table) {
            $table->id();
            $table->integer('program_id');
            $table->string('no_of_participants')->nullable();
            $table->string('no_of_applicants')->nullable();
            $table->string('no_of_mentors')->nullable();
            $table->string('no_of_casestudies')->nullable();
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
        Schema::dropIfExists('programcases');
    }
}
